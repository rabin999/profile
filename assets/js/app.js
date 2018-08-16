"use strict";
var _typeof =
        "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
            ? function(b) {
                return typeof b;
            }
            : function(b) {
                return b &&
                "function" == typeof Symbol &&
                b.constructor === Symbol &&
                b !== Symbol.prototype
                    ? "symbol"
                    : typeof b;
            },
    _createClass = (function() {
        function b(e, f) {
            for (var h, g = 0; g < f.length; g++)
                (h = f[g]),
                    (h.enumerable = h.enumerable || !1),
                    (h.configurable = !0),
                "value" in h && (h.writable = !0),
                    Object.defineProperty(e, h.key, h);
        }
        return function(e, f, g) {
            return f && b(e.prototype, f), g && b(e, g), e;
        };
    })();
function _classCallCheck(b, e) {
    if (!(b instanceof e))
        throw new TypeError("Cannot call a class as a function");
}
(function() {
    "use strict";
    function b() {
        var g =
                0 < arguments.length && arguments[0] !== void 0
                    ? arguments[0]
                    : "Error",
            h = arguments[1];
        if (h)
            if (window[g]) throw new window[g](h);
            else window.console && console.error(h);
    }
    function e() {
        return document.querySelector || document.querySelectorAll;
    }
    (function() {
        if (!e()) {
            var h = document,
                k = h.createStyleSheet();
            h.querySelectorAll = function(l, m, n, o, p) {
                for (
                    p = h.all,
                        m = [],
                        l = l.replace(/\[for\b/gi, "[htmlFor").split(","),
                        n = l.length;
                    n--;

                ) {
                    for (k.addRule(l[n], "k:v"), o = p.length; o--; )
                        p[o].currentStyle.k && m.push(p[o]);
                    k.removeRule(0);
                }
                return m;
            };
        }
    })();
    var f = (function() {
        function g(h) {
            _classCallCheck(this, g),
                (this.development = !0),
                (this.selector = h),
                (this.length = 0),
                (this.element = !1),
                this.init();
        }
        return (
            _createClass(g, [
                {
                    key: "__isWindowObj",
                    value: function __isWindowObj() {
                        return (
                            this.selector === this.selector.window ||
                            9 === this.selector.NodeType
                        );
                    }
                },
                {
                    key: "__singleObj",
                    value: function __singleObj() {
                        return this.element && !!!this.element.length;
                    }
                },
                {
                    key: "__hasEvent",
                    value: function __hasEvent(h) {
                        var k =
                            1 < arguments.length && void 0 !== arguments[1]
                                ? arguments[1]
                                : this.element;
                        return "undefined" != typeof k["on" + h];
                    }
                },
                {
                    key: "__manageEvent",
                    value: function __manageEvent(h, k, l) {
                        var m = this;
                        window[k] ||
                        l ||
                        b(
                            "ReferenceError",
                            "Event || Event Function reference not found"
                        ),
                        window[k] &&
                        this.element &&
                        (this.__isWindowObj() || this.__singleObj()
                            ? this.__hasEvent(h, this.element) && this.element[k](h, l)
                            : this.element.forEach(function(n) {
                                m.__hasEvent(h, n) && n[k](h, l);
                            }));
                    }
                },
                {
                    key: "__manageClass",
                    value: function __manageClass(h, k) {
                        var m = this;
                        h || b("ReferenceError", "Class arguments not founds !");
                        var l = h.trim().split(" ");
                        this.element &&
                        (this.__isWindowObj() || this.__singleObj()
                            ? l.forEach(function(n) {
                                m.element.classList[k](n);
                            })
                            : this.element.forEach(function(n) {
                                l.forEach(function(o) {
                                    n.classList[k](o);
                                });
                            }));
                    }
                },
                {
                    key: "__manageAttr",
                    value: function __manageAttr(h, k) {
                        var l =
                            2 < arguments.length && void 0 !== arguments[2] && arguments[2];
                        if (
                            (h.length || b("ReferenceError", "Attr not provided"),
                                !!this.element)
                        )
                            if (!(this.__isWindowObj() || this.__singleObj()))
                                "removeAttribute" === k || "getAttribute" === k
                                    ? this.element.forEach(function(m) {
                                        if (m.hasAttribute(h)) {
                                            if ("getAttribute" === k) return m[k](h);
                                            m[k](h);
                                        }
                                    })
                                    : this.element.forEach(function(m) {
                                        m[k](h, l);
                                    });
                            else if ("removeAttribute" !== k && "getAttribute" !== k)
                                this.element[k](h, l);
                            else if (this.element.hasAttribute(h)) {
                                if ("getAttribute" === k) return this.element[k](h);
                                this.element[k](h);
                            }
                    }
                },
                {
                    key: "__manageStyle",
                    value: function __manageStyle(h) {
                        (this.element || h) &&
                        (this.__isWindowObj() || this.__singleObj()
                            ? this.element.style && (this.element.style.display = h)
                            : this.element.forEach(function(k) {
                                k.style.display = h;
                            }));
                    }
                },
                {
                    key: "init",
                    value: function init() {
                        "string" == typeof this.selector && this.selector.length
                            ? ((this.element = document.querySelectorAll(this.selector)),
                                (this.length = this.element.length),
                            1 === this.length && (this.element = this.element[0]))
                            : "object" === _typeof(this.selector)
                            ? this.__isWindowObj()
                                ? ((this.element = this.selector), (this.length = 1))
                                : ((this.length = this.selector.length),
                                    (this.element = this.selector),
                                1 === this.length && (this.element = this.selector[0]))
                            : this.development &&
                            console.warn(
                                "Selector (" + this.selector + ") not found on DOM"
                            ),
                        (this.element instanceof HTMLElement ||
                            this.element instanceof Node ||
                            this.element instanceof NodeList) &&
                        this.element instanceof NodeList &&
                        !this.element.length &&
                        ((this.element = !1),
                        this.development &&
                        console.warn(
                            "Selector (" + this.selector + ") not found on DOM"
                        ));
                    }
                },
                {
                    key: "on",
                    value: function on(h) {
                        var k =
                            1 < arguments.length && void 0 !== arguments[1] && arguments[1];
                        this.__manageEvent(h, "addEventListener", k);
                    }
                },
                {
                    key: "off",
                    value: function off(h) {
                        var k =
                            1 < arguments.length && void 0 !== arguments[1] && arguments[1];
                        this.__manageEvent(h, "removeEventListener", k);
                    }
                },
                {
                    key: "addClass",
                    value: function addClass(h) {
                        return this.__manageClass(h, "add"), this;
                    }
                },
                {
                    key: "removeClass",
                    value: function removeClass(h) {
                        return this.__manageClass(h, "remove"), this;
                    }
                },
                {
                    key: "attr",
                    value: function attr(h) {
                        var k =
                            1 < arguments.length && void 0 !== arguments[1] && arguments[1];
                        if (k) this.__manageAttr(h, "setAttribute", k);
                        else return this.__manageAttr(h, "getAttribute");
                        return this;
                    }
                },
                {
                    key: "removeAttr",
                    value: function removeAttr(h) {
                        return this.__manageAttr(h, "removeAttribute"), this;
                    }
                },
                {
                    key: "html",
                    value: function html() {
                        return arguments[0] && "string" == typeof arguments[0]
                            ? ((this.element.innerHTML = arguments[0]), this)
                            : arguments[0] && !0 === arguments[0]
                                ? this.element.outerHTML
                                : this.element.innerHTML;
                    }
                },
                {
                    key: "remove",
                    value: function remove() {
                        return this.element.parentNode.removeChild(this.element), this;
                    }
                },
                {
                    key: "show",
                    value: function show() {
                        return this.__manageStyle("block"), this;
                    }
                },
                {
                    key: "hide",
                    value: function hide() {
                        return this.__manageStyle("none"), this;
                    }
                },
                {
                    key: "slide",
                    value: function slide(h, k) {
                        if (h) {
                            var l = "slide-" + h;
                            "left" === h
                                ? this.removeClass("slide-right slide-center").addClass(l)
                                : "right" === h
                                ? this.removeClass("slide-left slide-center").addClass(l)
                                : "center" == h &&
                                this.removeClass("slide-left slide-right").addClass(l),
                            "function" == typeof k && k();
                        }
                    }
                }
            ]),
                g
        );
    })();
    window.rb ||
    (window.rb = function(g) {
        return g || b("ReferenceError", "Reference not provided"), new f(g);
    });
})();
