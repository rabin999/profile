(() => {

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
    function error(type = "Error", message) {
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
        return (document.querySelector || document.querySelectorAll) ? true : false;
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
            this.selector = selector;
            this.length = 0;
            this.element = false;
            
            this.__setUpPrivateMethods();
            this.init();
            
        }

        // private helper
        __setUpPrivateMethods() {
            this.__proto__.__proto__.__isWindowObj = () => ((this.selector === this.selector.window || this.selector.NodeType === 9) ? true : false);
            this.__proto__.__proto__.__isObj = () => ((this.element && !this.element.hasOwnProperty('lenght')) ? true : false);

            // Event
            this.__proto__.__proto__.__hasEvent = (event) => (typeof this.element['on' + event] !== "undefined");
    
            this.__proto__.__proto__.__manageEvent = function(event, operation, callback) {
                if (!(window[operation] || callback)) {
                    error('ReferenceError', 'Event || Event Function reference not found');
                }
    
                if (window[operation]) {
                    if (this.__isWindowObj() || this.__isObj()) {
                        if (this.__hasEvent(event, this.element)) {
                            this.element[operation](event, callback);
                        }
                    } else {
                        this.element.forEach((el) => {
                            if (this.__hasEvent(event, el)) {
                                el[operation](event, callback);
                            }
                        });
                    }
                }
            }

            // Class
            this.__proto__.__proto__.__manageClass = function(classes, operation) {
                if (!classes)
                    error('ReferenceError', 'Class arguments not founds !');
    
                let classLists = classes.trim().split(' ');
    
                if (this.__isWindowObj() || this.__isObj()) {
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
            this.__proto__.__proto__.__manageAttr = function(attr, operation, value = false) {

                if (!value) {
                    error("Value not provided");
                }
    
                if (this.__isWindowObj() || this.__isObj()) {
                    if (operation === "removeAttribute") {
                        if (this.element.hasAttribute(attr)) {
                            this.element[operation](attr);
                        }
                    } else {
                        this.element[operation](attr, value);
                    }
                } else {
                    if (operation === "removeAttribute") {
                        this.element.forEach((el) => {
                            if (el.hasAttribute(attr))
                                el[operation](attr);
                        });
    
                    } else {
                        this.element.forEach((el) => {
                            el[operation](attr, value);
                        });
                    }
                }
            }
        }

        // Prepare selector
        init() {

            if (typeof this.selector === 'string' && this.selector.length) {
                this.element = document.querySelectorAll(this.selector);
                this.length = this.element.length;

                if(this.length === 1) {
                    this.element =  this.element[0];
                } 

            } else if (typeof this.selector === 'object') {
                if(this.__isWindowObj()) {
                    this.element = this.selector;
                    this.length = 1;
                } else {
                    this.length = this.selector.length;
                    this.element = this.selector;

                    if(this.length === 1) {
                        this.element =  this.selector[0];
                    } 
                }
            } else {
                error('ReferenceError', 'Selector not defined');
            }

            // Check Node found or not 
            if (this.element instanceof HTMLElement || this.element instanceof Node || this.element instanceof NodeList) {
                if (this.element instanceof NodeList) {
                    if (!this.element.length)
                        return this.element = false;
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

        off(event, callback = false) {
            this.__manageEvent(event, 'removeEventListener', callback);
        }

        /*
         * ---------------
         * Class
         * ---------------
         */

        addClass(classes) {
            this.__manageClass(classes, 'add');
        }

        removeClass(classes) {
            this.__manageClass(classes, 'remove');
        }


        /*
         * ---------------
         * Attributes
         * ---------------
         */
        attr(attr, value) {
            this.__manageAttr(attr, "setAttribute", value);
        }

        removeAttr(attr) {
            this.__manageAttr(attr, "removeAttribute");
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


// Load Event
rb(window).on("load", () => {
    ready();
});

// Resize Event
rb(window).on('resize', setContainerHeight);

function ready() {
    setContainerHeight();
};

// Set Container Width
function setContainerHeight() {
    let header = document.querySelector('header').offsetHeight,
        footer = document.querySelector('footer').offsetHeight,
        height = window.innerHeight - header - footer - 40;        
    let rule = 'height:' + height + 'px; min-height:' + height + 'px;';

    rb('main.container').attr("style", rule);
}

// Scroll Event For Percentage
document.querySelector('main.container').addEventListener("scroll", function(e) {
    let activePageHeight = parseInt(this.scrollHeight - this.clientHeight);
    let totalProcess = Math.round(((this.scrollTop / activePageHeight ) * 100));
    rb('.progress-bar').addClass('page-process')
    document.querySelector('.progress-bar').style.width = totalProcess+"%";
});


// Progress Bar
function initProgress(progress) {
    let percent = 5;
    document.querySelector('.progress-bar').style.width = 'auto';
    if (progress === undefined) {
        let p = setInterval(() => {
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
rb('.input > input').on('focus', function(e){
    if(this.nodeName === 'INPUT') {
        if(this.previousElementSibling.nodeName === 'LABEL') {
            this.previousElementSibling.classList.add('top');
        }
    }
});

rb('.input > input').on('blur', function(e){
    if(this.nodeName === 'INPUT') {
        if(this.previousElementSibling.nodeName === 'LABEL') {
            if(this.value.length) {
                this.previousElementSibling.classList.add('top');
            } else {
                this.previousElementSibling.classList.remove('top');
            }
        }
    }
});


// ChatBox Event
rb('.chatBox .close').on('click', function(e){
    document.querySelector('.chatBox').style.transform = 'scale(0)';
    setTimeout(function() { 
        rb('.chatBox').addClass('hidden');
    }, 500);
    document.querySelector('.startChat').classList.remove('hidden');
});

rb('.startChat').on('click', function(e){
    rb('.chatBox').removeClass('hidden');
    document.querySelector('.chatBox').style.transform = 'scale(1)';
    this.classList.add('hidden');
});