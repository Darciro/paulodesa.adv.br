(function ($) {
    $(document).ready(function () {
        pds.init();
    });

    var pds = {
        init: function () {
            this.menu();
            this.animation();
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

            // If element is scrolled into view, fade it in
            $(window).scroll(function() {
                $('.scroll-animations .animated').each(function() {
                    if (isScrolledIntoView(this) === true) {
                        $(this).removeClass('invisible').addClass( $(this).data('class-in') );
                    }
                });

                $('.about-sep').each(function() {
                    if (isScrolledIntoView(this) === true) {
                       $('.site-footer').removeClass('hidden');
                    } else {
                        $('.site-footer').addClass('hidden');
                    }
                });
            });
        }

    };
})(jQuery);
