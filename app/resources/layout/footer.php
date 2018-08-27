<!-- Spinner / Page Loader -->
<div class="spinner">
    <div class="double-bounce1"></div>
    <div class="double-bounce2"></div>
</div>

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