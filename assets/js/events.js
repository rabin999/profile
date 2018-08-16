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

// flatpickr("#blog-from-to-range", {
//     altInput: true,
//     altFormat: "F j, Y",
//     dateFormat: "Y-m-d",
//     mode: "range"
// });

if(rb) {
    // Grid Toggler
    rb('#list_view').on('click', function(e) {
        rb('#grid_view').removeClass('active');
        rb(this).addClass('active');
        rb('.blog-container > .blogs').removeClass('grid');
    });

    rb('#grid_view').on('click', function(e) {
        rb('#list_view').removeClass('active');
        rb(this).addClass('active');
        rb('.blog-container > .blogs').addClass('grid');
    });

    // Remove Loader
    // var s = setTimeout(function(){
    //     rb("#loaderDemo").remove();
    //     clearTimeout(s);
    // }, 2000);
}
