'use strict';

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/**
 *	Copyright
 *	Rabin Bhandari
 */

// ------------------------------------------------
// Utility
(function () {
    if (!window.rb) {
        window.rb = function (selector) {

            var element = null;

            // Prepare Node || Nodes
            if (typeof selector === 'string' && selector.length) {
                element = document.querySelectorAll(selector);
            } else if ((typeof selector === 'undefined' ? 'undefined' : _typeof(selector)) === 'object') {
                element = selector;
            } else {
                error('Selector not defined');
            }

            // Check Node found or not 
            if (element instanceof HTMLElement || element instanceof Node || element instanceof NodeList) {
                if (element instanceof NodeList) {
                    if (!element.length) return element = false;
                }
            }

            function error(message) {
                if (message) {
                    if (window.Error) {
                        throw new Error(message);
                    } else if (window.console) {
                        console.error(message);
                    }
                }
            }

            /*
            * ---------------
            * Events
            * ---------------
            */
            function on(event, callback) {
                __manageEvent(event, 'addEventListener', callback);
            }

            function off(event, callback) {
                __manageEvent(event, 'removeEventListener', callback);
            }

            /*
            * ---------------
            * Class
            * ---------------
            */
            function addClass(classes) {
                __manageClass(classes, 'add');
            }

            function removeClass(classes) {
                __manageClass(classes, 'remove');
            }

            // Private Functions


            // Check where given event is exist or not
            function __hasEvent(event, element) {
                return typeof element['on' + event] !== "undefined";
            }

            function __manageEvent(event, operation, callback) {

                if (!(window[operation] || callback)) {
                    error('Event || Event Function reference not found');
                }

                if (window[operation]) {
                    if (element === element.window || element.NodeType === 9) {
                        if (__hasEvent(event, element)) {
                            element[operation](event, callback);
                        }
                    } else {
                        element.forEach(function (el) {
                            if (__hasEvent(event, el)) {
                                el[operation](event, callback);
                            }
                        });
                    }
                }
            }

            function __manageClass(classes, operation) {

                if (!classes) {
                    error('Class arguments not founds !');
                }

                var classLists = classes.trim().split(' ');

                if (element === element.window || element.NodeType === 9) {
                    classLists.forEach(function (cl) {
                        element.classList[operation](cl);
                    });
                } else {
                    element.forEach(function (el) {
                        classLists.forEach(function (cl, index) {
                            el.classList[operation](cl);
                        });
                    });
                }
            }

            // Attributes
            function attr(name, value) {
                if (element === element.window || element.NodeType === 9) {
                    element.setAttribute(name, value);
                } else {
                    element.forEach(function (el) {
                        el.setAttribute(name, value);
                    });
                }
            }

            function removeAttr(name) {
                if (element === element.window || element.NodeType === 9) {
                    if (element.hasAttribute(name)) element.removeAttribute(name);
                } else {
                    element.forEach(function (el) {
                        if (el.hasAttribute(name)) el.removeAttribute(name);
                    });
                }
            }

            if (element) return {
                on: on,
                off: off,
                addClass: addClass,
                removeClass: removeClass,
                attr: attr,
                removeAttr: removeAttr
            };
        };
    }
})();

// Utility End
// -------------------------------------------------


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
    var header = document.querySelector('header').offsetHeight,
        footer = document.querySelector('footer').offsetHeight,
        height = window.innerHeight - header - footer - 40;
    var rule = 'height:' + height + 'px; min-height:' + height + 'px;';

    rb('main.container').attr("style", rule);
}

// Scroll Event For Percentage
document.querySelector('main.container').addEventListener("scroll", function (e) {
    var activePageHeight = parseInt(this.scrollHeight - this.clientHeight);
    var totalProcess = Math.round(this.scrollTop / activePageHeight * 100);
    rb('.progress-bar').addClass('page-process');
    document.querySelector('.progress-bar').style.width = totalProcess + "%";
});

// Progress Bar
function initProgress(progress) {
    var percent = 5;
    document.querySelector('.progress-bar').style.width = 'auto';
    if (progress === undefined) {
        var p = setInterval(function () {
            document.querySelector('.progress-bar').style.width = percent + '%';
            percent += 5;
            if (percent > 100) {
                clearInterval(p);
            }
        }, 0);
    }
}

// Page Animation on double click

// document.addEventListener("dblclick", (e) => {
//     let page = document.querySelector('.intro-text');
//     let size = parseInt((innerHeight / 100) * 80);
//     page.style.height = size+"px";
//     page.style.width = size+"px";
//     page.classList.remove('open-page');
//     page.classList.add('close-page');
// });


// Form Elements
rb('.input > input').on('focus', function (e) {
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