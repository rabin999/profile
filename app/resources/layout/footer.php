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

</script>
<script src="./assets/js/app.js"></script>
<script src="./assets/js/events.js"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>-->
</body>
</html>