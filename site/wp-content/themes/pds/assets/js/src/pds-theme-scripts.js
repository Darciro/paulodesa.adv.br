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
        },

        menu: function () { },

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

                if( $('body.single').length ) {
                    $('.entry-content .heading').each(function () {
                        if (isScrolledIntoView(this) === true) {
                            $('.jumbotron').addClass('foo');
                        }
                    });
                }

                if ($(this).scrollTop() > ($(window).innerHeight())) {
                    $('#mastfoot').removeClass('invisible');
                } else {
                    $('#mastfoot').addClass('invisible');
                }

            });


            /*var ml4 = {};
            ml4.opacityIn = [0,1];
            ml4.scaleIn = [0.2, 1];
            ml4.scaleOut = 3;
            ml4.durationIn = 800;
            ml4.durationOut = 600;
            ml4.delay = 500;

            anime.timeline({loop: true})
                .add({
                    targets: '.ml4 .letters-1',
                    opacity: ml4.opacityIn,
                    scale: ml4.scaleIn,
                    duration: ml4.durationIn
                }).add({
                targets: '.ml4 .letters-1',
                opacity: 0,
                scale: ml4.scaleOut,
                duration: ml4.durationOut,
                easing: "easeInExpo",
                delay: ml4.delay
            }).add({
                targets: '.ml4 .letters-2',
                opacity: ml4.opacityIn,
                scale: ml4.scaleIn,
                duration: ml4.durationIn
            }).add({
                targets: '.ml4 .letters-2',
                opacity: 0,
                scale: ml4.scaleOut,
                duration: ml4.durationOut,
                easing: "easeInExpo",
                delay: ml4.delay
            }).add({
                targets: '.ml4 .letters-3',
                opacity: ml4.opacityIn,
                scale: ml4.scaleIn,
                duration: ml4.durationIn
            }).add({
                targets: '.ml4 .letters-3',
                opacity: 0,
                scale: ml4.scaleOut,
                duration: ml4.durationOut,
                easing: "easeInExpo",
                delay: ml4.delay
            }).add({
                targets: '.ml4',
                opacity: 0,
                duration: 500,
                delay: 500
            });*/
        }

    };
})(jQuery);
