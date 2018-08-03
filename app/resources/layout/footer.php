<footer>
    &copy; Copyright <?php echo date('Y'); ?>
    <div class="follow-me">
        <span>Follow me on </span>
        <ul>
            <li>
                <a href="http://" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
                <a class="icon linked-in" href="https://np.linkedin.com/in/rabin-bhandari-b38b52119" target="_blank">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a class="icon google" href="https://plus.google.com/+RockRabin" target="_blank">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="http://" class="icon instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
</footer>

<script>

    // Binary File
    if ("connection" in navigator) {
        if (navigator.connection.saveData === true) {
            // Implement data saving operations here.
        }
    }

</script>
<script src="./assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#blog-from-to-range", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        mode: "range"
    });

    // Grid Toggler
    rb('#list_view').on('click', function(e) {
        rb('.blog-container > .blogs').removeClass('grid');
    });

    rb('#grid_view').on('click', function(e) {
        rb('.blog-container > .blogs').addClass('grid');
    });

    rb('.rb-toggle-view ul li button').on('click', function(e) {
        rb('.rb-toggle-view ul li button').removeClass('active');
        rb(this).addClass('active');
    });

</script>
</body>
</html>