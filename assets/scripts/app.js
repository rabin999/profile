        (() => {

            "use strict";

            /**
             *
             *  A small plugin written by Rabin Bhandari
             *
             *  @copyright 2018
             *  @author Rabin Bhandari <rabin.bhandari999@gmail.com>
             *
             */

            // -------------------------------
            //          Helpers
            // --------------------------------

            /**
             * @param type: string types of errors
             * @param message: string
             */
            function error(type = "Error", message) {
                if (message) {
                    if (window[type]) {
                        throw new window[type](message);
                    } else if (window.console) {
                        console.error(message);
                    }
                }
            }

            function querySelectorAllExist() {
                return (document.querySelector || document.querySelectorAll) ? true : false;
            }

            window.cl = function(value) {
                return console.log(value);
            }

            // -------------------------------
            //          Polyfill
            // --------------------------------
            Array.prototype.contains = function ( needle ) {
                for (let i in this) {
                    if (this[i] == needle) return true;
                }
                return false;
            };


            if (!Array.isArray) {
                Array.isArray = function(arg) {
                    return Object.prototype.toString.call(arg) === '[object Array]';
                };
            }

            // Query Selector Support for IE 7
            (function setUpQuerySelectorPolyfill() {
                if (!querySelectorAllExist()) {
                    let d = document,
                        s = d.createStyleSheet();
                    d.querySelectorAll = function (r, c, i, j, a) {
                        a = d.all, c = [], r = r.replace(/\[for\b/gi, '[htmlFor').split(',');
                        for (i = r.length; i--;) {
                            s.addRule(r[i], 'k:v');
                            for (j = a.length; j--;) a[j].currentStyle.k && c.push(a[j]);
                            s.removeRule(0);
                        }
                        return c;
                    }
                }
            })();

            class RB {
                constructor(selector) {

                    // Development Debug
                    this.development = true;
                    this.selector = selector;
                    this.length = 0;
                    this.element = false;
                    this.init();

                }

                // private helper
                __isWindowObj() {
                    return (this.selector === this.selector.window || this.selector.NodeType === 9) ? true : false
                };

                __singleObj() {
                    return (this.element && !Boolean(this.element.length)) ? true : false;
                };

                __hasEvent(event, element = this.element) {
                    return true;
                    // return typeof element['on' + event] !== "undefined";
                };

                __hasMultipleEvents(events) {
                    let evs = [];
                    if(events) {
                        events = events.split(' ');
                        if(events.length > 1) {
                            events.forEach(function(ev) {
                                if(ev !== '' && ev.match(/^[A-Za-z]+$/))
                                    evs.push(ev);
                            });
                        }
                    }
                    return (evs.length && evs.length > 1 ) ? evs : false;
                };

                __manageEvent(event, operation, callback) {
                    let that = this;
                    if (!(window[operation] || callback)) {
                        error('ReferenceError', 'Event || Event Function reference not found');
                    }

                    let multipleEvents = that.__hasMultipleEvents(event);
                    event = multipleEvents ? multipleEvents : event;

                    if (window[operation] && that.element) {
                        if (that.__isWindowObj() || that.__singleObj()) {
                            if(Array.isArray(event) && event.length > 1) {
                                if (that.__hasEvent(event, that.element)) {
                                    event.forEach(function (e) {
                                        that.element[operation](e, callback);
                                    });
                                }
                            } else {
                                if (that.__hasEvent(event, that.element)) {
                                    that.element[operation](event, callback);
                                }
                            }
                        } else {
                            if(Array.isArray(event) && event.length > 1) {
                                that.element.forEach((el) => {
                                    if (that.__hasEvent(event, el)) {
                                        event.forEach(function (e) {
                                            el[operation](e, callback);
                                        });
                                    }
                                });
                            } else {
                                that.element.forEach((el) => {
                                    if (that.__hasEvent(event, el)) {
                                        el[operation](event, callback);
                                    }
                                });
                            }
                        }
                    }
                }

                // Class
                __manageClass(classes, operation) {
                    if (!classes)
                        error('ReferenceError', 'Class arguments not founds !');

                    let classLists = classes.trim().split(' ');

                    if (!this.element) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        classLists.forEach((cl) => {
                            this.element.classList[operation](cl);
                        });
                    } else {
                        this.element.forEach((el) => {
                            classLists.forEach(function (cl, index) {
                                el.classList[operation](cl);
                            });
                        });
                    }
                }

                // Attr
                __manageAttr(attr, operation, value = false) {

                    if (!attr.length) {
                        error("ReferenceError", "Attr not provided");
                    }

                    if (!this.element) {
                        return;
                    }

                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (operation === "removeAttribute" || operation === "getAttribute") {
                            if (this.element.hasAttribute(attr)) {
                                if (operation === "getAttribute") {
                                    return this.element[operation](attr);
                                }
                                this.element[operation](attr);
                            }
                        } else {
                            this.element[operation](attr, value);
                        }
                    } else {
                        if (operation === "removeAttribute" || operation === "getAttribute") {
                            this.element.forEach((el) => {
                                if (el.hasAttribute(attr)) {
                                    if (operation === "getAttribute") {
                                        return el[operation](attr);
                                    }
                                    el[operation](attr);
                                }
                            });

                        } else {
                            this.element.forEach((el) => {
                                el[operation](attr, value);
                            });
                        }
                    }
                }

                // Class
                __manageStyle(operation) {
                    if (!this.element && !operation) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        if(this.element.style)
                            this.element.style.display = operation;
                    } else {
                        this.element.forEach((el) => {
                            el.style.display = operation;
                        });
                    }
                }

                // Prepare selector
                init() {

                    if (typeof this.selector === 'string' && this.selector.length) {
                        this.element = document.querySelectorAll(this.selector);
                        this.length = this.element.length;

                        if (this.length === 1) {
                            this.element = this.element[0];
                        }

                    } else if (typeof this.selector === 'object') {
                        if (this.__isWindowObj()) {
                            this.element = this.selector;
                            this.length = 1;
                        } else {
                            this.length = this.selector.length;
                            this.element = this.selector;

                            if (this.length === 1) {
                                this.element = this.selector[0];
                            }
                        }
                    } else {
                        if (this.development)
                            console.warn(`Selector (${this.selector}) not found on DOM`);
                    }

                    // Check Node found or not
                    if (this.element instanceof HTMLElement || this.element instanceof Node || this.element instanceof NodeList) {
                        if (this.element instanceof NodeList) {
                            if (!this.element.length) {
                                this.element = false;
                                if (this.development)
                                    console.warn(`Selector (${this.selector}) not found on DOM`);
                            }
                        }
                    }
                }

                /*
                 * ---------------
                 * Events
                 * ---------------
                 */

                on(event, callback = false) {
                    this.__manageEvent(event, 'addEventListener', callback);
                }

                one(event, callback = false) {
                    if (window["addEventListener"] && this.element) {
                        if (this.__isWindowObj() || this.__singleObj()) {
                            if (this.__hasEvent(event, this.element)) {
                                this.element.addEventListener(event, handler);
                            }
                        } else {
                            this.element.forEach((el) => {
                                if (this.__hasEvent(event, el)) {
                                    el.addEventListener(event, handler);
                                }
                            });
                        }
                    }

                    function handler(e) {
                        e.target.removeEventListener(e.type, handler);
                        return callback();
                    }
                }

                off(event, callback = false) {
                    this.__manageEvent(event, 'removeEventListener', callback);
                }

                /*
                 * ---------------
                 * Class
                 * ---------------
                 */
                hasClass(className) {
                    let r = false;
                    if (!className.length)
                        error('ReferenceError', 'Class argument not founds !');

                    className = className.trim();

                    if(this.element.classList.length) {
                        if(this.element.classList.length === 1 && this.element.classList[0] === className) {
                            r = true;
                        } else {
                            this.element.classList.forEach(function(cl){
                                cl = cl.trim();
                                if(className === cl) {
                                    r = true;
                                }
                            });
                        }
                    }
                    return r;
                }

                addClass(classes) {
                    this.__manageClass(classes, 'add');
                    return this;
                }

                removeClass(classes) {
                    this.__manageClass(classes, 'remove');
                    return this;
                }


                /*
                 * ---------------
                 * Attributes
                 * ---------------
                 */
                attr(attr, value = false) {
                    if (value) {
                        this.__manageAttr(attr, "setAttribute", value);
                    } else {
                        return this.__manageAttr(attr, "getAttribute");
                    }
                    return this;
                }

                removeAttr(attr) {
                    this.__manageAttr(attr, "removeAttribute");
                    return this;
                }

                isChecked() {
                    if(this.element.checked === true)
                        return true;
                    return false;
                }

                css(rules) {
                    if (!this.element && !rules) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        if(Object.keys(rules)) {
                            for(let key in rules) {
                                this.element.style[key] = rules[key];
                            }
                        }
                    } else {
                        this.element.forEach((el) => {
                            if(Object.keys(rules)) {
                                for(let key in rules) {
                                    el.style[key] = rules[key];
                                }
                            }
                        });
                    }
                }

                /*
                 * ---------------
                 * Page
                 * ---------------
                 */
                ready(callback) {
                    if(this.element && this.element === document && this.element.readyState === "loading") {
                        this.element.addEventListener('DOMContentLoaded', callback);
                    }
                }

                html() {
                    // Update New Dom Element
                    if (arguments[0] && typeof arguments[0] === "string") {
                        this.element.innerHTML = arguments[0];
                        return this;
                    } else {
                        // Return Outer HTMl
                        if (arguments[0] && arguments[0] === true)
                            return this.element.outerHTML;
                        return this.element.innerHTML;
                    }
                }

                /*
                 * ---------------
                 * Utilities
                 * ---------------
                 */
                remove() {
                    this.element.parentNode.removeChild(this.element);
                    return this;
                }

                ucFirst(string) {
                    return string.charAt(0).toUpperCase() + string.slice(1);
                }

                /*
                 * ---------------
                 * Effect
                 * ---------------
                 */
                show() {
                    this.__manageStyle('block');
                    return this;
                }

                hide() {
                    this.__manageStyle('none');
                    return this;
                }

                slide(direction, callback) {
                    if(direction) {
                        let direction_class = "slide-"+direction;

                        if(direction === "left") {
                            this.removeClass('slide-right slide-center').addClass(direction_class);
                        }
                        else if(direction === "right") {
                            this.removeClass('slide-left slide-center').addClass(direction_class);
                        }
                        else if(direction === "center") {
                            this.removeClass('slide-left slide-right').addClass(direction_class);
                        }

                        if(typeof callback == "function") {
                            callback();
                        }
                    }
                }
            }

            if (!window.rb) {
                window.rb = function (ref) {
                    if (!ref)
                        error('ReferenceError', 'Reference not provided');
                    return new RB(ref);
                }
            }
        })();
