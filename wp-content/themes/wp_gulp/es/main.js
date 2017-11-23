jQuery(document).ready(function ($) {

    //home_url
    //theme_url

    //++++++++++++++++++++++++++++++++++++++++++
    //init Foundation
    //++++++++++++++++++++++++++++++++++++++++++

    $(document).foundation();


    //++++++++++++++++++++++++++++++++++++++++++
    //  Init Slick
    //++++++++++++++++++++++++++++++++++++++++++



    // $('.slides').slick({
    //  /*dots: false,*/
    //  infinite: true,
    //  adaptiveHeight: false,
    //  arrows: true,
    //  // appendArrows: $('.sliderarrows')
    //     // variableWidth: true,
    //     // slidesToShow: 1
    // });

    //++++++++++++++++++++++++++++++++++++++++++
    //Share icons
    //++++++++++++++++++++++++++++++++++++++++++

    $('.shareicon').on('click', function (event) {
        event.preventDefault();
        /* Act on the event */
        var $this = $(this),
        url = $this.parent("a").attr('href');


        // function share(, title, descr, image, winWidth, winHeight) {
            var winTop = (screen.height / 2) - (520 / 2);
            var winLeft = (screen.width / 2) - (350 / 2);
            window.open(url, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + 520 + ',height=' + 350);
        // }

    });



    //++++++++++++++++++++++++++++++++++++++++++
    //Scroll to top/down
    //++++++++++++++++++++++++++++++++++++++++++

    $('.scrollTop').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 'slow');
    });


    $('.scrollDown').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: $(window).height()}, 'slow');

    });


    $('.scrollto').on('click', function (event) {
        event.preventDefault();
        let top = $($(this).attr("href")).offset().top;
        $('html, body').animate({scrollTop: top}, 'slow');
    });
    

    $('.scrollToMap').on('click', function (event) {
        event.preventDefault();
        let top = $(document).height() - $(window).height();
        let $this = $(this);
        $('html, body').animate({scrollTop: top}, 800, null, function() {

            if ($this.is('[id^="link"]')) {
                let id =  $this.attr('id').split('link')[1] - 1;
                console.log(id);
                google.maps.event.trigger(markers[id], 'click');
            } else {
                console.log("nope");
            }
            
        });
    });



    //++++++++++++++++++++++++++++++++++++++++++
    //To to url
    //++++++++++++++++++++++++++++++++++++++++++

    $('.gotourl').on('click', function (event) {
        event.preventDefault();

        if (typeof $(this).data('newwindow') == "undefined") {
            window.location.href = $(this).data('url');
        } else {
            window.open($(this).data('url'));
        }
    });

    //++++++++++++++++++++++++++++++++++++++++++
    //on Resize
    //++++++++++++++++++++++++++++++++++++++++++

    $(window).on('resize', function (event) {
        var width = $(window).width(),
        height = $(window).height();
    });

    $(window).trigger('resize');




});





