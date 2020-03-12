(function ($) {
    'use strict';
    var vars = {
        mastfootHeight: 0
    };

    $(document).ready(function () {
        pds.init();
    });

    var pds = {
        init: function () {
            this.utils();
            this.menu();
            this.animation();
        },

        utils: function () {
            vars.mastfootHeight = $('#mastfoot').outerHeight();
            $('.site-footer-padding').height(vars.mastfootHeight);

            console.log(vars.mastfootHeight);
        },

        menu: function () {

        },

        animation: function () {

            // Check if element is scrolled into view
            function isScrolledIntoView(elem) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();

                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();

                return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }

            $(window).scroll(function () {

                if( $(this).scrollTop() > 1 ) {
                    $('.scroll-down').fadeOut();
                } else {
                    $('.scroll-down').fadeIn();
                }

                if (vars.mastfootHeight !== $('#mastfoot').outerHeight())
                    $('.site-footer-padding').height($('#mastfoot').outerHeight());

                $('.scroll-animations .animated').each(function () {
                    if (isScrolledIntoView(this) === true) {
                        $(this).removeClass('invisible').addClass($(this).data('class-in'));
                    }
                });

                if ($(this).scrollTop() > ($(window).innerHeight())) {
                    $('#mastfoot').removeClass('invisible');
                } else {
                    $('#mastfoot').addClass('invisible');
                }

            });
        }

    };
})(jQuery);
