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
