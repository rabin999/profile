var loadDeferredStyles = function () {
    var addStylesNode = document.getElementById("deferred-styles");
    if (addStylesNode) {
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement);
        addStylesNode.parentElement.removeChild(addStylesNode)
    }
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function () {
    window.setTimeout(loadDeferredStyles, 0)
}); else window.addEventListener("load", loadDeferredStyles);
rb(window).on("load", function (e) {
    var selectedPage = sessionStorage.getItem("page");
    if (selectedPage) {
        changePage('.navigate_page[data-page-target="' + selectedPage + '"]')
    } else {
        setHeight()
    }
});
rb(".navigate_page").on("click", changePage);

function changePage(o) {
    var selector;
    if (rb(".mobile-menu").attr("menu")) {
        rb(".mobile-menu").removeAttr("menu");
        rb("#menuClose").hide();
        rb("#menuOpen").show();
        rb("header > nav").hide();
        rb("body").removeClass("o-h")
    }
    if (typeof o.target !== "undefined") {
        o.preventDefault();
        selector = o.target
    }
    if (o.length) {
        selector = o
    }
    var loader = null, targetPage = rb(selector).attr("data-page-target");
    if (window.location.pathname.split("/")[1]) {
        window.location.assign(window.location.origin);
        sessionStorage.setItem("page", targetPage)
    }
    if (targetPage) {
        if (!rb(selector).hasClass("showing")) {
            rb(".page__style[data-page]").removeClass("showing").css({height: null});
            rb("footer").addClass("bottom");
            rb(".spinner").addClass("active");
            loader = setTimeout(function () {
                rb(".spinner.active").removeClass("active");
                rb("footer").removeClass("bottom");
                rb('.page__style[data-page="' + targetPage + '"]').addClass("showing");
                setHeight(targetPage);
                sessionStorage.removeItem("page");
                clearTimeout(loader)
            }, 500)
        }
    }
}

function setHeight(targetPage) {
    var selector = typeof targetPage === "undefined" ? ".page__style.showing" : '.page__style[data-page="' + targetPage + '"]';
    if (!isMobile()) {
        rb(selector).css({"min-height": window.innerHeight - rb("header").element.offsetHeight - 148 - rb("footer").element.offsetHeight + "px"})
    }
}

rb("#list_view").on("click", function (e) {
    rb("#grid_view").removeClass("active");
    rb(this).addClass("active");
    rb(".blog-container > .blogs").removeClass("grid")
});
rb("#grid_view").on("click", function (e) {
    rb("#list_view").removeClass("active");
    rb(this).addClass("active");
    rb(".blog-container > .blogs").addClass("grid")
});
rb("#mode-switcher").on("click", function () {
    if (rb(this).isChecked()) {
        rb(".blog-container aside.summary").css({display: "none"});
        rb(".blog-container > .blogs").css({width: "100%"})
    } else {
        rb(".blog-container > .blogs").css({width: "70%"});
        rb(".blog-container aside.summary").css({display: "block"})
    }
});
var modal = rb("#imgModal"), modalImg = rb("#imgContainer"), captionText = rb("#caption");
rb(".popup").on("click", function (e) {
    modal.css({display: "block"});
    modalImg.element.src = rb(this).element.src;
    captionText.html(rb(this).element.alt)
});
rb("#closeImgModal").on("click", function () {
    modal.css({display: "none"})
});
rb(document).on("keyup", function (e) {
    if (modal.length && e.keyCode === 27 && modal.element.style.display === "block") {
        modal.css({display: "none"})
    }
});
rb(document).ready(function () {
    if (!getCookie("cookies")) rb("#cookies").removeClass("hidden"); else rb("#cookies").addClass("hidden")
});
rb("#allowCookies").one("click", function (e) {
    e.preventDefault();
    if (!getCookie("cookies")) document.cookie = "cookies=accepted";
    rb(this).closest("#cookies").remove()
});
var text;
rb(".auto-remove-text").on("focus", function (e) {
    text = rb(this).text();
    if (text) {
        rb(this).text("")
    }
});
rb("#menuOpen").on("click", function (e) {
    e.stopPropagation();
    rb(rb(this).closest(".mobile-menu")).attr("menu", "open");
    rb(this).hide();
    rb("#menuClose").show();
    rb("body").addClass("o-h");
    rb("header > nav").show()
});
rb("#menuClose").on("click", function (e) {
    e.stopPropagation();
    rb(rb(this).closest(".mobile-menu")).removeAttr("menu");
    rb(this).hide();
    rb("#menuOpen").show();
    rb("body").removeClass("o-h");
    rb("header > nav").hide()
});
var prevText;
rb("[rel=send]").on("click", showSendProcess);

function showSendProcess(e) {
    e.preventDefault();
    var t = this;
    rb(t.form).validateForm();
    rb(t).off("click", showSendProcess);
    prevText = rb(t).text();
    rb(t).text("Sending....");
    var s = setTimeout(function () {
        rb(t).text(prevText);
        rb(t).on("click", showSendProcess);
        clearTimeout(s)
    }, 700)
}

var aText = ["Rabin", "Bhandari"];
var iSpeed = 110;
var iIndex = 0;
var iArrLength = aText[0].length;
var iScrollAt = 20;
var iTextPos = 0;
var sContents = "";
var iRow;
var destination = document.getElementById("fullName");

function typewriter() {
    sContents = " ";
    iRow = Math.max(0, iIndex - iScrollAt);
    while (iRow < iIndex) {
        sContents += aText[iRow++] + "<br />"
    }
    if (iTextPos == 8) {
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos)
    } else {
        destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_"
    }
    if (iTextPos++ == iArrLength) {
        iTextPos = 0;
        iIndex++;
        if (iIndex != aText.length) {
            iArrLength = aText[iIndex].length;
            setTimeout("typewriter()", 500)
        }
    } else {
        setTimeout("typewriter()", iSpeed)
    }
}

rb(window).on("load", function () {
    if (destination) {
        typewriter()
    }
});