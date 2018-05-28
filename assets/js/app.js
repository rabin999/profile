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

            this.selector = selector;
            this.length = 0;
            this.element = false;

            this.__setUpPrivateMethods();
            this.init();
        }

        // private helper


        _createClass(RB, [{
            key: "__setUpPrivateMethods",
            value: function __setUpPrivateMethods() {
                var _this = this;

                this.__proto__.__proto__.__isWindowObj = function () {
                    return _this.selector === _this.selector.window || _this.selector.NodeType === 9 ? true : false;
                };

                this.__proto__.__proto__.__singleObj = function () {
                    return _this.element && !Boolean(_this.element.length) ? true : false;
                };

                // Event
                this.__proto__.__proto__.__hasEvent = function (event) {
                    var element = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : _this.element;

                    return typeof element['on' + event] !== "undefined";
                };

                this.__proto__.__proto__.__manageEvent = function (event, operation, callback) {
                    var _this2 = this;

                    if (!(window[operation] || callback)) {
                        error('ReferenceError', 'Event || Event Function reference not found');
                    }

                    if (window[operation]) {
                        if (this.__isWindowObj() || this.__singleObj()) {
                            if (this.__hasEvent(event, this.element)) {
                                this.element[operation](event, callback);
                            }
                        } else {
                            this.element.forEach(function (el) {
                                if (_this2.__hasEvent(event, el)) {
                                    el[operation](event, callback);
                                }
                            });
                        }
                    }
                };

                // Class
                this.__proto__.__proto__.__manageClass = function (classes, operation) {
                    var _this3 = this;

                    if (!classes) error('ReferenceError', 'Class arguments not founds !');

                    var classLists = classes.trim().split(' ');

                    if (this.__isWindowObj() || this.__singleObj()) {
                        classLists.forEach(function (cl) {
                            _this3.element.classList[operation](cl);
                        });
                    } else {
                        this.element.forEach(function (el) {
                            classLists.forEach(function (cl, index) {
                                el.classList[operation](cl);
                            });
                        });
                    }
                };

                // Attr 
                this.__proto__.__proto__.__manageAttr = function (attr, operation) {
                    var value = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;


                    if (!value) {
                        error("Value not provided");
                    }

                    if (this.__isWindowObj() || this.__singleObj()) {
                        if (operation === "removeAttribute") {
                            if (this.element.hasAttribute(attr)) {
                                this.element[operation](attr);
                            }
                        } else {
                            this.element[operation](attr, value);
                        }
                    } else {
                        if (operation === "removeAttribute") {
                            this.element.forEach(function (el) {
                                if (el.hasAttribute(attr)) el[operation](attr);
                            });
                        } else {
                            this.element.forEach(function (el) {
                                el[operation](attr, value);
                            });
                        }
                    }
                };
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
                    error('ReferenceError', 'Selector not defined');
                }

                // Check Node found or not 
                if (this.element instanceof HTMLElement || this.element instanceof Node || this.element instanceof NodeList) {
                    if (this.element instanceof NodeList) {
                        if (!this.element.length) return this.element = false;
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
            }
        }, {
            key: "removeClass",
            value: function removeClass(classes) {
                this.__manageClass(classes, 'remove');
            }

            /*
             * ---------------
             * Attributes
             * ---------------
             */

        }, {
            key: "attr",
            value: function attr(_attr, value) {
                this.__manageAttr(_attr, "setAttribute", value);
            }
        }, {
            key: "removeAttr",
            value: function removeAttr(attr) {
                this.__manageAttr(attr, "removeAttribute");
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

// Load Event
rb(window).on("load", function () {
    ready();
});

// Resize Event
rb(window).on('resize', setContainerHeight);

function ready() {
    setContainerHeight();
};

// Set Container Width
function setContainerHeight() {
    var header = rb('header').element.offsetHeight,
        footer = rb('footer').element.offsetHeight,
        height = window.innerHeight - header - footer - 40;
    var rule = 'height:' + height + 'px; min-height:' + height + 'px;';

    rb('main.container').attr("style", rule);
}

// Scroll Event For Percentage
rb('main.container').on("scroll", function (e) {
    var activePageHeight = parseInt(this.scrollHeight - this.clientHeight),
        totalProcess = Math.round(this.scrollTop / activePageHeight * 100);
    rb('.progress-bar').addClass('page-process');
    rb('.progress-bar').element.style.width = totalProcess + "%";
});

// Progress Bar
function initProgress(progress) {
    var percent = 5;
    rb('.progress-bar').element.style.width = 'auto';
    if (progress === undefined) {
        var p = setInterval(function () {
            rb('.progress-bar').element.style.width = percent + '%';
            percent += 5;
            if (percent > 100) {
                clearInterval(p);
            }
        }, 0);
    }
}

// Page Animation on double click

// rb(document).on("dblclick", (e) => {
//     let page = rb('.intro-text').element;
//     let size = parseInt((innerHeight / 100) * 80);
//     page.style.height = size+"px";
//     page.style.width = size+"px";
//     rb('.intro-text').removeClass('open-page');
//     rb('.intro-text').addClass('close-page');
// });


// Form Elements
rb('.input > input').on('focus', function (e) {
    console.log("Input clicked");
    if (this.nodeName === 'INPUT') {
        if (this.previousElementSibling.nodeName === 'LABEL') {
            this.previousElementSibling.classList.add('top');
        }
    }
});

rb('.input > input').on('blur', function (e) {
    if (this.nodeName === 'INPUT') {
        if (this.previousElementSibling.nodeName === 'LABEL') {
            if (this.value.length) {
                this.previousElementSibling.classList.add('top');
            } else {
                this.previousElementSibling.classList.remove('top');
            }
        }
    }
});

// ChatBox Event
rb('.chatBox .close').on('click', function (e) {
    document.querySelector('.chatBox').style.transform = 'scale(0)';
    setTimeout(function () {
        rb('.chatBox').addClass('hidden');
    }, 500);
    document.querySelector('.startChat').classList.remove('hidden');
});

rb('.startChat').on('click', function (e) {
    rb('.chatBox').removeClass('hidden');
    document.querySelector('.chatBox').style.transform = 'scale(1)';
    this.classList.add('hidden');
});