// Stylesheet loader
var loadDeferredStyles = function () {
    var addStylesNode = document.getElementById("deferred-styles");
    if (addStylesNode) {
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
    }
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
    window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function () {
    window.setTimeout(loadDeferredStyles, 0);
});
else window.addEventListener('load', loadDeferredStyles);

// Page Loader

rb(window).on('load', function(e) {
    var selectedPage = sessionStorage.getItem('page');
    if(selectedPage) {
        changePage('.navigate_page[data-page-target="'+selectedPage+'"]');
    } else {
        // if(!isMobile()) {
        //     rb('.page__style.showing').css({
        //         "height": (window.innerHeight - rb('header').element.offsetHeight - 50 - rb('footer').element.offsetHeight+'px')
        //     });
        // }
    }
});

rb('.navigate_page').on('click', changePage);


function changePage(o) {
    var selector;

    if(rb(".mobile-menu").attr('menu')) {
        rb(".mobile-menu").removeAttr('menu');
        rb('#menuClose').hide();
        rb('#menuOpen').show();
        rb('header > nav').hide();
        rb('body').removeClass('o-h');
    }

    if(typeof o.target !== "undefined") {
        o.preventDefault();
        selector = o.target;
    }

    if(o.length) {
        selector = o;
    }

    var loader =  null,
        targetPage = rb(selector).attr('data-page-target');

    // if in another page / blog
    if(window.location.pathname.split('/')[2]) {
        window.location.assign(window.location.origin+'/profile')
        sessionStorage.setItem('page', targetPage);
    }

    if(targetPage) {
        if(!rb(selector).hasClass('showing')) {
            rb('.page__style[data-page]').removeClass('showing').css({
                "height": null
            });

            rb('footer').addClass('bottom');
            rb('.spinner').addClass('active');

            loader = setTimeout(function() {
                rb('.spinner.active').removeClass('active');
                rb('footer').removeClass('bottom');
                rb('.page__style[data-page="'+targetPage+'"]').addClass('showing');

                // if(!isMobile()) {
                //     rb('.page__style[data-page="'+targetPage+'"]').css({
                //         "height": (window.innerHeight - rb('header').element.offsetHeight - 50 - rb('footer').element.offsetHeight+'px')
                //     });
                // }

                sessionStorage.removeItem('page');
                clearTimeout(loader);
            }, 500);
        }
    }
}


// Grid Toggler
rb('#list_view').on('click', function (e) {
    rb('#grid_view').removeClass('active');
    rb(this).addClass('active');
    rb('.blog-container > .blogs').removeClass('grid');
});

rb('#grid_view').on('click', function (e) {
    rb('#list_view').removeClass('active');
    rb(this).addClass('active');
    rb('.blog-container > .blogs').addClass('grid');
});

// Remove Loader
// var s = setTimeout(function(){
//     rb("#loaderDemo").remove();
//     clearTimeout(s);
// }, 2000);

// Mode Switcher
rb("#mode-switcher").on('click', function () {
    if (rb(this).isChecked()) {
        rb(".blog-container aside.summary").css({
            "display": "none"
        });
        rb(".blog-container > .blogs").css({
            "width": "100%"
        });
    } else {
        rb(".blog-container > .blogs").css({
            "width": "70%"
        });
        rb(".blog-container aside.summary").css({
            "display": "block"
        });
    }
});

/*
* Image Modal
* */
var modal = rb('#imgModal'),
    modalImg = rb("#imgContainer"),
    captionText = rb("#caption");

rb(".popup").on('click', function (e) {
    modal.css({
        "display": "block"
    });
    modalImg.element.src = rb(this).element.src;
    captionText.html(rb(this).element.alt);
});

rb("#closeImgModal").on('click', function () {
    modal.css({
        "display": "none"
    });
});

rb(document).on('keyup', function (e) {
    if (e.keyCode === 27 && modal.element.style.display === "block") {
        modal.css({
            "display": "none"
        });
    }
});

/*
* Cookies
* */

rb(document).ready(function() {
    if(!getCookie("cookies"))
        rb("#cookies").removeClass('hidden');
    else
        rb("#cookies").addClass('hidden');
})

rb("#allowCookies").one('click', function(e) {
    e.preventDefault();
    if(!getCookie("cookies"))
        document.cookie = "cookies=accepted";
    rb(this).closest("#cookies").remove();
});

/*
* Auto Remove text : contact, hireme
* */
var text;
rb('.auto-remove-text').on('focus', function(e){
   text = rb(this).text();
   if(text) {
       rb(this).text('');
   }
});


/*
* Mobile Menu Event
* */

// open menu
rb('#menuOpen').on('click', function(e) {
    rb(rb(this).closest(".mobile-menu")).attr('menu','open');
    rb(this).hide();
    rb('#menuClose').show();

    rb('body').addClass('o-h');
    rb('header > nav').show();
});

// close menu
rb('#menuClose').on('click', function(e) {
    rb(rb(this).closest(".mobile-menu")).removeAttr('menu');
    rb(this).hide();
    rb('#menuOpen').show();

    rb('body').removeClass('o-h');
    rb('header > nav').hide();
});

/*
* Form submit action
* */
var prevText;
rb('[rel=send]').on('click', showSendProcess);

function showSendProcess(e) {
    e.preventDefault();
    var t = this;

    rb(t).off('click', showSendProcess);

    prevText = rb(t).text();
    rb(t).text('Sending....');

    var s = setTimeout(function(){
        cl(prevText)
        rb(t).text(prevText);
        rb(t).on('click', showSendProcess);
        clearTimeout(s);
    }, 700);
}