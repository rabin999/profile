
    var isAnimating = false,
        newLocation = '';
    firstLoad = false;

    function transitionsSupported() {
        return rb('html').hasClass('csstransitions');
    }

    function loadNewContent(url, bool) {

        console.log('load Container');
        var section = rb('.cd-about-container').html;

        // load new content and replace <main> content with the new one
        rb('main').html(section);
        //if browser doesn't support CSS transitions - dont wait for the end of transitions
        var delay = (transitionsSupported()) ? 1200 : 0;
        setTimeout(function() {
            console.log('test');
            //wait for the end of the transition on the loading bar before revealing the new content
            // (rb('.cd-main-content').hasClass('cd-about')) ? rb('body').addClass('cd-about'): rb('body').removeClass('cd-about');
            rb('body').removeClass('page-is-changing');
            rb('.cd-loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                isAnimating = false;
                rb('.cd-loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
            });

            if (!transitionsSupported()) isAnimating = false;
        }, delay);

        if (url != window.location && bool) {
            //add the new page to the window.history
            //if the new page was triggered by a 'popstate' event, don't add it
            window.history.pushState({ path: url }, '', url);
        }
    }

    function changePage(url, bool) {
        console.log('change Page');
        isAnimating = true;
        rb('body').addClass('page-is-changing');
        rb('.cd-loading-bar').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            console.log('one');
            loadNewContent(url, bool);
            newLocation = url;
            rb('.cd-loading-bar').off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
        });

        if (!transitionsSupported()) {
            loadNewContent(url, bool);
            newLocation = url;
        }
    }

    // trigger smooth transition from the actual page to the new one
    rb('[data-type="page-transition"]').on('click',function(event) {
        event.preventDefault();
        var newPage = rb(this).attr('href');
        if(!isAnimating)
            changePage(newPage, true);
        firstLoad = true;
    });

    rb(window).on('popstate', function() {
        if(firstLoad) {
            var newPageArray = location.pathname.split('/'),
                newPage = newPageArray[newPageArray.length - 1];

            if(!isAnimating && newLocation != newPage) {
                changePage(newPage, false);
            }
        }

        firstLoad = true;
    });