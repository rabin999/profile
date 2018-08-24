"use strict";

var _typeof =
    typeof Symbol === "function" && typeof Symbol.iterator === "symbol"
        ? function(obj) {
            return typeof obj;
        }
        : function(obj) {
            return obj &&
            typeof Symbol === "function" &&
            obj.constructor === Symbol &&
            obj !== Symbol.prototype
                ? "symbol"
                : typeof obj;
        };

var _createClass = (function() {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }
    return function(Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
})();

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

(function() {
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

    function error() {
        var type =
            arguments.length > 0 && arguments[0] !== undefined
                ? arguments[0]
                : "Error";
        var message = arguments[1];

        if (message) {
            if (window[type]) {
                throw new window[type](message);
            } else if (window.console) {
                console.error(message);
            }
        }
    }

    function querySelectorAllExist() {
        return document.querySelector || document.querySelectorAll ? true : false;
    }

    window.cl = function(value) {
        return console.log(value);
    };

    window.cd = function(value) {
        return console.dir(value);
    };

    // -------------------------------
    //          Polyfill
    // --------------------------------
    Array.prototype.contains = function(needle) {
        for (var i in this) {
            if (this[i] == needle) return true;
        }
        return false;
    };

    if (!Array.isArray) {
        Array.isArray = function(arg) {
            return Object.prototype.toString.call(arg) === "[object Array]";
        };
    }

    // Event Support for IE >= 7
    if (!Element.prototype.addEventListener) {
        var runListeners = function runListeners(oEvent) {
            if (!oEvent) {
                oEvent = window.event;
            }
            for (
                var iLstId = 0, iElId = 0, oEvtListeners = oListeners[oEvent.type];
                iElId < oEvtListeners.aEls.length;
                iElId++
            ) {
                if (oEvtListeners.aEls[iElId] === this) {
                    for (iLstId; iLstId < oEvtListeners.aEvts[iElId].length; iLstId++) {
                        oEvtListeners.aEvts[iElId][iLstId].call(this, oEvent);
                    }
                    break;
                }
            }
        };

        var oListeners = {};

        Element.prototype.addEventListener = function(
            sEventType,
            fListener /*, useCapture (will be ignored!) */
        ) {
            if (oListeners.hasOwnProperty(sEventType)) {
                var oEvtListeners = oListeners[sEventType];
                for (
                    var nElIdx = -1, iElId = 0;
                    iElId < oEvtListeners.aEls.length;
                    iElId++
                ) {
                    if (oEvtListeners.aEls[iElId] === this) {
                        nElIdx = iElId;
                        break;
                    }
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
                        if (aElListeners[iLstId] === fListener) {
                            return;
                        }
                    }
                    aElListeners.push(fListener);
                }
            } else {
                oListeners[sEventType] = { aEls: [this], aEvts: [[fListener]] };
                this["on" + sEventType] = runListeners;
            }
        };
        Element.prototype.removeEventListener = function(
            sEventType,
            fListener /*, useCapture (will be ignored!) */
        ) {
            if (!oListeners.hasOwnProperty(sEventType)) {
                return;
            }
            var oEvtListeners = oListeners[sEventType];
            for (
                var nElIdx = -1, iElId = 0;
                iElId < oEvtListeners.aEls.length;
                iElId++
            ) {
                if (oEvtListeners.aEls[iElId] === this) {
                    nElIdx = iElId;
                    break;
                }
            }
            if (nElIdx === -1) {
                return;
            }
            for (
                var iLstId = 0, aElListeners = oEvtListeners.aEvts[nElIdx];
                iLstId < aElListeners.length;
                iLstId++
            ) {
                if (aElListeners[iLstId] === fListener) {
                    aElListeners.splice(iLstId, 1);
                }
            }
        };
    }

    // Query Selector Support for IE >= 7
    (function setUpQuerySelectorPolyfill() {
        if (!querySelectorAllExist()) {
            var d = document,
                s = d.createStyleSheet();
            d.querySelectorAll = function(r, c, i, j, a) {
                (a = d.all),
                    (c = []),
                    (r = r.replace(/\[for\b/gi, "[htmlFor").split(","));
                for (i = r.length; i--; ) {
                    s.addRule(r[i], "k:v");
                    for (j = a.length; j--; ) {
                        a[j].currentStyle.k && c.push(a[j]);
                    }
                    s.removeRule(0);
                }
                return c;
            };
        }
    })();

    var RB = (function() {
        function RB(selector) {
            _classCallCheck(this, RB);

            // Development Debug
            this.development = true;
            this.selector = selector;
            this.length = 0;
            this.element = false;
            this.init();
        }

        // private helper

        _createClass(RB, [
            {
                key: "__isWindowObj",
                value: function __isWindowObj() {
                    return this.selector === this.selector.window ||
                    this.selector.NodeType === 9
                        ? true
                        : false;
                }
            },
            {
                key: "__singleObj",
                value: function __singleObj() {
                    return this.element && !Boolean(this.element.length) ? true : false;
                }
            },
            {
                key: "__hasEvent",
                value: function __hasEvent(event) {
                    var element =
                        arguments.length > 1 && arguments[1] !== undefined
                            ? arguments[1]
                            : this.element;

                    return true;
                    // return typeof element['on' + event] !== "undefined";
                }
            },
            {
                key: "__hasMultipleEvents",
                value: function __hasMultipleEvents(events) {
                    var evs = [];
                    if (events) {
                        events = events.split(" ");
                        if (events.length > 1) {
                            events.forEach(function(ev) {
                                if (ev !== "" && ev.match(/^[A-Za-z]+$/)) evs.push(ev);
                            });
                        }
                    }
                    return evs.length && evs.length > 1 ? evs : false;
                }
            },
            {
                key: "__handler",
                value: function __handler(options, e) {
                    window.options = options;

                    /*
                          * [options]
                          *
                          * data
                          * callback
                          * */
                    if (Object.keys(options).length) {
                        // attached function on event
                        if (options.callback.name) return options.callback(e);

                        // anonymous event
                        if (options.callback.length) return options.callback(e);
                    }
                }
            },
            {
                key: "__manageEvent",
                value: function __manageEvent(event, operation, callback) {
                    var _this = this;

                    var that = this;
                    var data = null;

                    if (!(window[operation] || callback)) {
                        error(
                            "ReferenceError",
                            "Event || Event Function reference not found"
                        );
                    }
                    var multipleEvents = that.__hasMultipleEvents(event);

                    event = multipleEvents ? multipleEvents : event;

                    if (window[operation] && that.element) {
                        // Single Object
                        if (that.__isWindowObj() || that.__singleObj()) {
                            if (Array.isArray(event) && event.length > 1) {
                                if (that.__hasEvent(event, that.element)) {
                                    event.forEach(function(e) {
                                        that.element[operation](
                                            e,
                                            that.__handler.bind(this, {
                                                data: data,
                                                callback: callback
                                            })
                                        );
                                    });
                                }
                            } else {
                                if (that.__hasEvent(event, that.element)) {
                                    that.element[operation](
                                        event,
                                        that.__handler.bind(this, {
                                            data: data,
                                            callback: callback
                                        })
                                    );
                                }
                            }
                        } else {
                            // Multiple Objects
                            if (Array.isArray(event) && event.length > 1) {
                                that.element.forEach(function(el) {
                                    if (that.__hasEvent(event, el)) {
                                        event.forEach(function(e) {
                                            el[operation](
                                                e,
                                                that.__handler.bind(this, {
                                                    data: data,
                                                    callback: callback
                                                })
                                            );
                                        });
                                    }
                                });
                            } else {
                                that.element.forEach(function(el) {
                                    if (that.__hasEvent(event, el)) {
                                        el[operation](
                                            event,
                                            that.__handler.bind(_this, {
                                                data: data,
                                                callback: callback
                                            })
                                        );
                                    }
                                });
                            }
                        }
                    }
                }

                // Class
            },
            {
                key: "__manageClass",
                value: function __manageClass(classes, operation) {
                    var _this2 = this;

                    if (!classes) error("ReferenceError", "Class arguments not founds !");

                    var classLists = classes.trim().split(" ");

                    if (!this.element) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        classLists.forEach(function(cl) {
                            _this2.element.classList[operation](cl);
                        });
                    } else {
                        this.element.forEach(function(el) {
                            classLists.forEach(function(cl, index) {
                                el.classList[operation](cl);
                            });
                        });
                    }
                }

                // Attr
            },
            {
                key: "__manageAttr",
                value: function __manageAttr(attr, operation) {
                    var value =
                        arguments.length > 2 && arguments[2] !== undefined
                            ? arguments[2]
                            : false;

                    if (!attr.length) {
                        error("ReferenceError", "Attr not provided");
                    }

                    if (!this.element) {
                        return;
                    }

                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (
                            operation === "removeAttribute" ||
                            operation === "getAttribute"
                        ) {
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
                        if (
                            operation === "removeAttribute" ||
                            operation === "getAttribute"
                        ) {
                            this.element.forEach(function(el) {
                                if (el.hasAttribute(attr)) {
                                    if (operation === "getAttribute") {
                                        return el[operation](attr);
                                    }
                                    el[operation](attr);
                                }
                            });
                        } else {
                            this.element.forEach(function(el) {
                                el[operation](attr, value);
                            });
                        }
                    }
                }

                // Class
            },
            {
                key: "__manageStyle",
                value: function __manageStyle(operation) {
                    if (!this.element && !operation) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (this.element.style) this.element.style.display = operation;
                    } else {
                        this.element.forEach(function(el) {
                            el.style.display = operation;
                        });
                    }
                }

                // Prepare selector
            },
            {
                key: "init",
                value: function init() {
                    if (typeof this.selector === "string" && this.selector.length) {
                        this.element = document.querySelectorAll(this.selector);
                        this.length = this.element.length;

                        if (this.length === 1) {
                            this.element = this.element[0];
                        }
                    } else if (_typeof(this.selector) === "object") {
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
                            console.warn("Selector (" + this.selector + ") not found on DOM");
                    }

                    // Check Node found or not
                    if (
                        this.element instanceof HTMLElement ||
                        this.element instanceof Node ||
                        this.element instanceof NodeList
                    ) {
                        if (this.element instanceof NodeList) {
                            if (!this.element.length) {
                                this.element = false;
                                if (this.development)
                                    console.warn(
                                        "Selector (" + this.selector + ") not found on DOM"
                                    );
                            }
                        }
                    }
                }

                /*
                     * ---------------
                     * Events
                     * ---------------
                     */
            },
            {
                key: "on",
                value: function on(event) {
                    var callback =
                        arguments.length > 1 && arguments[1] !== undefined
                            ? arguments[1]
                            : false;

                    this.__manageEvent(event, "addEventListener", callback);
                }
            },
            {
                key: "one",
                value: function one(event) {
                    var _this3 = this;

                    var callback =
                        arguments.length > 1 && arguments[1] !== undefined
                            ? arguments[1]
                            : false;

                    if (window["addEventListener"] && this.element) {
                        if (this.__isWindowObj() || this.__singleObj()) {
                            if (this.__hasEvent(event, this.element)) {
                                this.element.addEventListener(event, handler);
                            }
                        } else {
                            this.element.forEach(function(el) {
                                if (_this3.__hasEvent(event, el)) {
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
            },
            {
                key: "off",
                value: function off(event) {
                    var callback =
                        arguments.length > 1 && arguments[1] !== undefined
                            ? arguments[1]
                            : false;

                    this.__manageEvent(event, "removeEventListener", callback);
                }

                /*
                     * ---------------
                     * Class
                     * ---------------
                     */
            },
            {
                key: "hasClass",
                value: function hasClass(className) {
                    var r = false;
                    if (!className.length)
                        error("ReferenceError", "Class argument not founds !");

                    className = className.trim();

                    if (this.element.classList.length) {
                        if (
                            this.element.classList.length === 1 &&
                            this.element.classList[0] === className
                        ) {
                            r = true;
                        } else {
                            this.element.classList.forEach(function(cl) {
                                cl = cl.trim();
                                if (className === cl) {
                                    r = true;
                                }
                            });
                        }
                    }
                    return r;
                }
            },
            {
                key: "addClass",
                value: function addClass(classes) {
                    this.__manageClass(classes, "add");
                    return this;
                }
            },
            {
                key: "removeClass",
                value: function removeClass(classes) {
                    this.__manageClass(classes, "remove");
                    return this;
                }

                /*
                     * ---------------
                     * Attributes
                     * ---------------
                     */
            },
            {
                key: "attr",
                value: function attr(_attr) {
                    var value =
                        arguments.length > 1 && arguments[1] !== undefined
                            ? arguments[1]
                            : false;

                    if (value) {
                        this.__manageAttr(_attr, "setAttribute", value);
                    } else {
                        return this.__manageAttr(_attr, "getAttribute");
                    }
                    return this;
                }
            },
            {
                key: "removeAttr",
                value: function removeAttr(attr) {
                    this.__manageAttr(attr, "removeAttribute");
                    return this;
                }
            },
            {
                key: "isChecked",
                value: function isChecked() {
                    if (this.element.checked === true) return true;
                    return false;
                }
            },
            {
                key: "css",
                value: function css(rules) {
                    if (!this.element && !rules) {
                        return;
                    }
                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (Object.keys(rules)) {
                            for (var key in rules) {
                                this.element.style[key] = rules[key];
                            }
                        }
                    } else {
                        this.element.forEach(function(el) {
                            if (Object.keys(rules)) {
                                for (var _key in rules) {
                                    el.style[_key] = rules[_key];
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
            },
            {
                key: "ready",
                value: function ready(callback) {
                    if (
                        this.element &&
                        this.element === document &&
                        this.element.readyState === "loading"
                    ) {
                        this.element.addEventListener("DOMContentLoaded", callback);
                    }
                }
            },
            {
                key: "html",
                value: function html() {
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
            },
            {
                key: "remove",
                value: function remove() {
                    this.element.parentNode.removeChild(this.element);
                    return this;
                }
            },
            {
                key: "ucFirst",
                value: function ucFirst(string) {
                    return string.charAt(0).toUpperCase() + string.slice(1);
                }

                /*
                     * ---------------
                     * Effect
                     * ---------------
                     */
            },
            {
                key: "show",
                value: function show() {
                    this.__manageStyle("block");
                    return this;
                }
            },
            {
                key: "hide",
                value: function hide() {
                    this.__manageStyle("none");
                    return this;
                }
            },
            {
                key: "slide",
                value: function slide(direction, callback) {
                    if (direction) {
                        var direction_class = "slide-" + direction;

                        if (direction === "left") {
                            this.removeClass("slide-right slide-center").addClass(
                                direction_class
                            );
                        } else if (direction === "right") {
                            this.removeClass("slide-left slide-center").addClass(
                                direction_class
                            );
                        } else if (direction === "center") {
                            this.removeClass("slide-left slide-right").addClass(
                                direction_class
                            );
                        }

                        if (typeof callback == "function") {
                            callback();
                        }
                    }
                }
            }
        ]);

        return RB;
    })();

    if (!window.rb) {
        window.rb = function(ref) {
            if (!ref) error("ReferenceError", "Reference not provided");
            return new RB(ref);
        };
    }
})();
