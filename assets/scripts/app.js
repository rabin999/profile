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
        return !!(document.querySelector || document.querySelectorAll);
    }

    window.cl = function(value) {
        return console.log(value);
    };

    window.cd = function(value) {
        return console.dir(value);
    }

    window.isMobile = function() {
        if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
            return true;
        }
        return false;
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

    /*
    * Closest DOM API
    * */
    if (!Element.prototype.matches)
        Element.prototype.matches = Element.prototype.msMatchesSelector ||
            Element.prototype.webkitMatchesSelector;

    if (!Element.prototype.closest)
        Element.prototype.closest = function(s) {
            var el = this;
            if (!document.documentElement.contains(el)) return null;
            do {
                if (el.matches(s)) return el;
                el = el.parentElement || el.parentNode;
            } while (el !== null && el.nodeType === 1);
            return null;
        };

    /*
    * Event Support for IE >= 7
    * */
    if (!Element.prototype.addEventListener) {
        var oListeners = {};
        function runListeners(oEvent) {
            if (!oEvent) { oEvent = window.event; }
            for (var iLstId = 0, iElId = 0, oEvtListeners = oListeners[oEvent.type]; iElId < oEvtListeners.aEls.length; iElId++) {
                if (oEvtListeners.aEls[iElId] === this) {
                    for (iLstId; iLstId < oEvtListeners.aEvts[iElId].length; iLstId++) { oEvtListeners.aEvts[iElId][iLstId].call(this, oEvent); }
                    break;
                }
            }
        }
        Element.prototype.addEventListener = function (sEventType, fListener /*, useCapture (will be ignored!) */) {
            if (oListeners.hasOwnProperty(sEventType)) {
                var oEvtListeners = oListeners[sEventType];
                for (var nElIdx = -1, iElId = 0; iElId < oEvtListeners.aEls.length; iElId++) {
                    if (oEvtListeners.aEls[iElId] === this) { nElIdx = iElId; break; }
                }
                if (nElIdx === -1) {
                    oEvtListeners.aEls.push(this);
                    oEvtListeners.aEvts.push([fListener]);
                    this["on" + sEventType] = runListeners;
                } else {
                    var aElListeners = oEvtListeners.aEvts[nElIdx];
                    if (this["on" + sEventType] !== runListeners) {
                        aElListeners.splice(0);
                        this["on" + sEventType] = runListeners;
                    }
                    for (var iLstId = 0; iLstId < aElListeners.length; iLstId++) {
                        if (aElListeners[iLstId] === fListener) { return; }
                    }
                    aElListeners.push(fListener);
                }
            } else {
                oListeners[sEventType] = { aEls: [this], aEvts: [ [fListener] ] };
                this["on" + sEventType] = runListeners;
            }
        };
        Element.prototype.removeEventListener = function (sEventType, fListener /*, useCapture (will be ignored!) */) {
            if (!oListeners.hasOwnProperty(sEventType)) { return; }
            var oEvtListeners = oListeners[sEventType];
            for (var nElIdx = -1, iElId = 0; iElId < oEvtListeners.aEls.length; iElId++) {
                if (oEvtListeners.aEls[iElId] === this) { nElIdx = iElId; break; }
            }
            if (nElIdx === -1) { return; }
            for (var iLstId = 0, aElListeners = oEvtListeners.aEvts[nElIdx]; iLstId < aElListeners.length; iLstId++) {
                if (aElListeners[iLstId] === fListener) { aElListeners.splice(iLstId, 1); }
            }
        };
    }

    /*
    * Query Selector Support for IE >= 7
    * */
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

    /*
    * Cookies
    * */
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    class RB {
        constructor(selector) {

            // Development Debug
            this.development = false;
            this.selector = selector;
            this.length = 0;
            this.element = false;
            this.init();

        }

        // private helper
        __isWindowObj() {
            return (this.selector === this.selector.window || this.selector.NodeType === 9) ? true : false;
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

        __manageEvent(event, operation, callback, options = null) {
            let that = this,
                multipleEvents = that.__hasMultipleEvents(event);
            event = multipleEvents ? multipleEvents : event;

            if (!(window[operation] || callback)) {
                error('ReferenceError', 'Event || Event Function reference not found');
            }

            if(operation === "removeEventListener") {
                this.element.removeEventListener(event, callback, (options !== null) ? options : '');
                return;
            }



            if (window[operation] && that.element) {
                // Single Object
                if (that.__isWindowObj() || that.__singleObj()) {
                    if(Array.isArray(event) && event.length > 1) {
                        if (that.__hasEvent(event, that.element)) {
                            event.forEach(function (e) {
                                that.element[operation](e, callback, (options !== null) ? options : '');
                            });
                        }
                    } else {
                        if (that.__hasEvent(event, that.element)) {
                            that.element[operation](event, callback, (options !== null) ? options : '');
                        }
                    }
                } else {
                    // Multiple Objects
                    if(Array.isArray(event) && event.length > 1) {
                        that.element.forEach((el) => {
                            if (that.__hasEvent(event, el)) {
                                event.forEach(function (e) {
                                    el[operation](e, callback, (options !== null) ? options : '');
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
                    if (!this.element.length || !this.element) {
                        this.element = false;
                        if (this.development)
                            console.warn(`Selector (${this.selector}) not found on DOM`);
                        return;
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
            this.__manageEvent(event, 'addEventListener', callback, {once: true});
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

            // if(this.element.classList.length === 1 && this.element.classList[0] === className) {
            if (this.element.classList.length) {
                if (this.element.classList.length === 1 && this.element.classList.contains(className)) {
                    r = true;
                } else {
                    this.element.classList.forEach(function (cl) {
                        cl
                            = cl.trim();
                        if (className === cl) {
                            r = true;
                        }
                    });
                }

                return r;
            }
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
            if (!this.element || !rules) {
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
         * Traversing
         * ---------------
         */
        closest(value) {
            if (this.element && !this.__isWindowObj() || this.__singleObj()) {
                return this.element.closest(value);
            }
            throw new ReferenceError(`${value} not found !`);
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
