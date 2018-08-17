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
var pageheight;
rb(document).ready(function(){
    pageheight = window.innerHeight - rb('header').element.offsetHeight - 50 - rb('footer').element.offsetHeight+'px';
    rb('.page__style.fadeIn').css({
        "height": pageheight
    });
});

rb('.navigate_page').on('click', function (e) {

    if(window.location.href === "http://localhost/profile/")
        e.preventDefault();

    rb('header > nav').addClass('hidden');
    rb('div.fadeIn').removeClass('fadeIn');
    // animate content
    rb('.page__style').addClass('animate_content');
    //rb('.page__description').fadeOut(100).delay(2800).fadeIn();

    var a  = setTimeout(function () {
        rb('.page__style').removeClass('animate_content');
        clearTimeout(a);
    }, 3200);

    //remove fadeIn class after 1500ms
    var b = setTimeout(function () {
        rb('.page__style').removeClass('fadeIn');
        clearTimeout(b);
    }, 1500);
});

// on click show page after 1500ms
rb('*[data-page-target]').on('click', function () {
    var targetPage = rb(this).attr("data-page-target");
    rb('div[data-page='+targetPage+']').addClass('fadeIn');
    pageheight = window.innerHeight - rb('header').element.offsetHeight - 50 - rb('footer').element.offsetHeight+'px';
    rb('div[data-page='+targetPage+'] > .page__description').css({
        height:pageheight
    });

    var s = setTimeout(function() {
        rb('div[data-page='+targetPage+']').addClass('fadeIn');
        rb('header > nav').removeClass('hidden');
        clearTimeout(s);
    }, 1500);
});



// flatpickr("#blog-from-to-range", {
//     altInput: true,
//     altFormat: "F j, Y",
//     dateFormat: "Y-m-d",
//     mode: "range"
// });


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
