<!-- Spinner / Page Loader -->
<div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div>

<!-- Cookies Section -->
<section id="cookies" class="hidden">
    <div class="text">
        &rarr;&nbsp;&nbsp;We use cookies to tailor your experience, measure site performance and present relevant offers and advertisements. By clicking on 'Allow' or any content on this site, you agree that cookies can be placed. You can
        <a href="#">view our policies</a> or <a href="#">manage your cookies</a> here.
    </div>
    <button id="allowCookies">Allow</button>
</section>

<footer>
    Copyright @ 2018 Rabin Bhandari
</footer>

<!-- Async Stylesheet  -->
<noscript id="deferred-styles">
<link rel="stylesheet" href="./assets/css/app.css">
</noscript>
<script>
// Stylesheet loader
var loadDeferredStyles = function() {
var addStylesNode = document.getElementById("deferred-styles");
var replacement = document.createElement("div");
replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
addStylesNode.parentElement.removeChild(addStylesNode);
};
var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
else window.addEventListener('load', loadDeferredStyles);
    /*
        * Image Loader
        * */
        document.addEventListener("DOMContentLoaded", function() {
            var lazyImages = [].slice.call(document.querySelectorAll("img.lazy"));
            var active = false;

            var lazyLoad = function lazyLoad() {
                if (active === false) {
                    active = true;

                    setTimeout(function() {
                        lazyImages.forEach(function(lazyImage) {
                            if (
                                lazyImage.getBoundingClientRect().top <= window.innerHeight &&
                                lazyImage.getBoundingClientRect().bottom >= 0 &&
                                getComputedStyle(lazyImage).display !== "none"
                            ) {
                                lazyImage.src = lazyImage.dataset.src;
                                (lazyImage.dataset.srcset) ? lazyImage.srcset = lazyImage.dataset.srcset : "";
                                lazyImage.classList.remove("lazy");

                                lazyImages = lazyImages.filter(function(image) {
                                    return image !== lazyImage;
                                });

                                if (lazyImages.length === 0) {
                                    document.removeEventListener("scroll", lazyLoad);
                                    window.removeEventListener("resize", lazyLoad);
                                    window.removeEventListener("orientationchange", lazyLoad);
                                }
                            }
                        });

                        active = false;
                    }, 200);
                }
            };

            document.addEventListener("scroll", lazyLoad);
            window.addEventListener("resize", lazyLoad);
            window.addEventListener("orientationchange", lazyLoad);
            lazyLoad();
        });
        
    function loadAsyncScript(d){function b(a){function c(a){var b=document.createElement("script");b.src=a;document.getElementsByTagName("body")[0].appendChild(b)}a.length&&(1===a.length?c(a[0]):a.forEach(function(a){c(a)}));window.removeEventListener("load",b)}window.addEventListener("load",b.bind(this,d))};

        // Load Script after window load
        loadAsyncScript(["./assets/js/main.js"]);
    
</script>
<!--<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>-->
</body>
</html>