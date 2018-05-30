"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

(function () {

    "use strict";

    /**
     * 
     * A small plugin written by Rabin Bhandari
     * 
     *	@copyright 2018
     *	@author Rabin Bhandari <rabin.bhandari999@gmail.com>
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
        var type = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : "Error";
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
            d.querySelectorAll = function (r, c, i, j, a) {
                a = d.all, c = [], r = r.replace(/\[for\b/gi, '[htmlFor').split(',');
                for (i = r.length; i--;) {
                    s.addRule(r[i], 'k:v');
                    for (j = a.length; j--;) {
                        a[j].currentStyle.k && c.push(a[j]);
                    }s.removeRule(0);
                }
                return c;
            };
        }
    })();

    var RB = function () {
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


        _createClass(RB, [{
            key: "__isWindowObj",
            value: function __isWindowObj() {
                return this.selector === this.selector.window || this.selector.NodeType === 9 ? true : false;
            }
        }, {
            key: "__singleObj",
            value: function __singleObj() {
                return this.element && !Boolean(this.element.length) ? true : false;
            }
        }, {
            key: "__hasEvent",
            value: function __hasEvent(event) {
                var element = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.element;

                return typeof element['on' + event] !== "undefined";
            }
        }, {
            key: "__manageEvent",
            value: function __manageEvent(event, operation, callback) {
                var _this = this;

                if (!(window[operation] || callback)) {
                    error('ReferenceError', 'Event || Event Function reference not found');
                }

                if (window[operation] && this.element) {
                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (this.__hasEvent(event, this.element)) {
                            this.element[operation](event, callback);
                        }
                    } else {
                        this.element.forEach(function (el) {
                            if (_this.__hasEvent(event, el)) {
                                el[operation](event, callback);
                            }
                        });
                    }
                }
            }

            // Class

        }, {
            key: "__manageClass",
            value: function __manageClass(classes, operation) {
                var _this2 = this;

                if (!classes) error('ReferenceError', 'Class arguments not founds !');

                var classLists = classes.trim().split(' ');

                if (!this.element) {
                    return;
                }
                if (this.__isWindowObj() || this.__singleObj()) {
                    classLists.forEach(function (cl) {
                        _this2.element.classList[operation](cl);
                    });
                } else {
                    this.element.forEach(function (el) {
                        classLists.forEach(function (cl, index) {
                            el.classList[operation](cl);
                        });
                    });
                }
            }

            // Attr 

        }, {
            key: "__manageAttr",
            value: function __manageAttr(attr, operation) {
                var value = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;


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
                        this.element.forEach(function (el) {
                            if (el.hasAttribute(attr)) {
                                if (operation === "getAttribute") {
                                    return el[operation](attr);
                                }
                                el[operation](attr);
                            }
                        });
                    } else {
                        this.element.forEach(function (el) {
                            el[operation](attr, value);
                        });
                    }
                }
            }

            // Prepare selector

        }, {
            key: "init",
            value: function init() {

                if (typeof this.selector === 'string' && this.selector.length) {
                    this.element = document.querySelectorAll(this.selector);
                    this.length = this.element.length;

                    if (this.length === 1) {
                        this.element = this.element[0];
                    }
                } else if (_typeof(this.selector) === 'object') {
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
                    if (this.development) console.warn("Selector (" + this.selector + ") not found on DOM");
                }

                // Check Node found or not 
                if (this.element instanceof HTMLElement || this.element instanceof Node || this.element instanceof NodeList) {
                    if (this.element instanceof NodeList) {
                        if (!this.element.length) {
                            this.element = false;
                            if (this.development) console.warn("Selector (" + this.selector + ") not found on DOM");
                        }
                    }
                }
            }

            /*
             * ---------------
             * Events
             * ---------------
             */

        }, {
            key: "on",
            value: function on(event) {
                var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

                this.__manageEvent(event, 'addEventListener', callback);
            }
        }, {
            key: "off",
            value: function off(event) {
                var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

                this.__manageEvent(event, 'removeEventListener', callback);
            }

            /*
             * ---------------
             * Class
             * ---------------
             */

        }, {
            key: "addClass",
            value: function addClass(classes) {
                this.__manageClass(classes, 'add');
                return this;
            }
        }, {
            key: "removeClass",
            value: function removeClass(classes) {
                this.__manageClass(classes, 'remove');
                return this;
            }

            /*
             * ---------------
             * Attributes
             * ---------------
             */

        }, {
            key: "attr",
            value: function attr(_attr) {
                var value = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

                if (value) {
                    this.__manageAttr(_attr, "setAttribute", value);
                } else {
                    return this.__manageAttr(_attr, "getAttribute");
                }
                return this;
            }
        }, {
            key: "removeAttr",
            value: function removeAttr(attr) {
                this.__manageAttr(attr, "removeAttribute");
                return this;
            }

            /*
             * ---------------
             * Page
             * ---------------
             */

        }, {
            key: "html",
            value: function html() {
                // Update New Dom Element
                if (arguments[0] && typeof arguments[0] === "string") {
                    this.element.innerHTML = arguments[0];
                    return this;
                } else {
                    // Return Outer HTMl
                    if (arguments[0] && arguments[0] === true) return this.element.outerHTML;
                    return this.element.innerHTML;
                }
            }
        }]);

        return RB;
    }();

    if (!window.rb) {
        window.rb = function (ref) {
            if (!ref) error('ReferenceError', 'Reference not provided');
            return new RB(ref);
        };
    }
})();

// Scroll Event For Percentage
// Optimize Scroll performace
var ticking = false;
var lastScrollPosition = 0;

rb(window).on("scroll", function (e) {
    lastScrollPosition = window.scrollY;
    if (!ticking) {
        window.requestAnimationFrame(function () {
            scrolling(lastScrollPosition);
            ticking = false;
        });
        ticking = true;
    }
});

function scrolling(lastScrollPosition) {
    if (lastScrollPosition > 100) {
        rb('header.menu').removeClass('static').addClass('fixed');
    } else {
        rb('header.menu').removeClass('fixed').addClass('static');
    }

    // let activePageHeight = parseInt(window.scrollHeight - window.clientHeight),
    //     totalProcess = Math.round(((window.scrollTop / activePageHeight ) * 100));
    //     console.log(totalProcess);

    // rb('.progress-bar').addClass('page-process');
    // rb('.progress-bar').element.style.width = totalProcess+"%";
}

// Top Nav bar
rb('nav.top ul li > a').on('click', function (e) {
    var id = rb(this).attr('href');
    var found = rb(id).length;

    if (window.scroll && id.indexOf("#") !== -1 && found) {
        e.preventDefault();

        window.location.hash = id;
        window.scroll({
            top: rb(id).element.offsetTop - 50,
            left: 0,
            behavior: 'smooth'
        });
    }
});