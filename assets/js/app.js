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

    // Helpers
    function querySelectorAllExist() {
        return document.querySelector || document.querySelectorAll ? true : false;
    }

    // Query Selector Support for IE 7
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

                    return typeof element["on" + event] !== "undefined";
                }
            },
            {
                key: "__manageEvent",
                value: function __manageEvent(event, operation, callback) {
                    var _this = this;

                    if (!(window[operation] || callback)) {
                        error(
                            "ReferenceError",
                            "Event || Event Function reference not found"
                        );
                    }

                    if (window[operation] && this.element) {
                        if (this.__isWindowObj() || this.__singleObj()) {
                            if (this.__hasEvent(event, this.element)) {
                                this.element[operation](event, callback);
                            }
                        } else {
                            this.element.forEach(function(el) {
                                if (_this.__hasEvent(event, el)) {
                                    el[operation](event, callback);
                                }
                            });
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
                    else return false;
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
