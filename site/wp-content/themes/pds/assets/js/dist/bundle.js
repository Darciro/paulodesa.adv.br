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

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJidW5kbGUuanMiXSwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uICgkKSB7XG4gICAgJ3VzZSBzdHJpY3QnO1xuICAgIHZhciB2YXJzID0ge1xuICAgICAgICBtYXN0Zm9vdEhlaWdodDogMFxuICAgIH07XG5cbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XG4gICAgICAgIHBkcy5pbml0KCk7XG4gICAgfSk7XG5cbiAgICB2YXIgcGRzID0ge1xuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB0aGlzLnV0aWxzKCk7XG4gICAgICAgICAgICB0aGlzLm1lbnUoKTtcbiAgICAgICAgICAgIHRoaXMuYW5pbWF0aW9uKCk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgdXRpbHM6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHZhcnMubWFzdGZvb3RIZWlnaHQgPSAkKCcjbWFzdGZvb3QnKS5vdXRlckhlaWdodCgpO1xuICAgICAgICAgICAgJCgnLnNpdGUtZm9vdGVyLXBhZGRpbmcnKS5oZWlnaHQodmFycy5tYXN0Zm9vdEhlaWdodCk7XG4gICAgICAgIH0sXG5cbiAgICAgICAgbWVudTogZnVuY3Rpb24gKCkgeyB9LFxuXG4gICAgICAgIGFuaW1hdGlvbjogZnVuY3Rpb24gKCkge1xuXG4gICAgICAgICAgICAvLyBDaGVjayBpZiBlbGVtZW50IGlzIHNjcm9sbGVkIGludG8gdmlld1xuICAgICAgICAgICAgZnVuY3Rpb24gaXNTY3JvbGxlZEludG9WaWV3KGVsZW0pIHtcbiAgICAgICAgICAgICAgICB2YXIgZG9jVmlld1RvcCA9ICQod2luZG93KS5zY3JvbGxUb3AoKTtcbiAgICAgICAgICAgICAgICB2YXIgZG9jVmlld0JvdHRvbSA9IGRvY1ZpZXdUb3AgKyAkKHdpbmRvdykuaGVpZ2h0KCk7XG5cbiAgICAgICAgICAgICAgICB2YXIgZWxlbVRvcCA9ICQoZWxlbSkub2Zmc2V0KCkudG9wO1xuICAgICAgICAgICAgICAgIHZhciBlbGVtQm90dG9tID0gZWxlbVRvcCArICQoZWxlbSkuaGVpZ2h0KCk7XG5cbiAgICAgICAgICAgICAgICByZXR1cm4gKChlbGVtQm90dG9tIDw9IGRvY1ZpZXdCb3R0b20pICYmIChlbGVtVG9wID49IGRvY1ZpZXdUb3ApKTtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbiAoKSB7XG5cbiAgICAgICAgICAgICAgICBpZiggJCh0aGlzKS5zY3JvbGxUb3AoKSA+IDEgKSB7XG4gICAgICAgICAgICAgICAgICAgICQoJy5zY3JvbGwtZG93bicpLmZhZGVPdXQoKTtcbiAgICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICAgICAkKCcuc2Nyb2xsLWRvd24nKS5mYWRlSW4oKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBpZiAodmFycy5tYXN0Zm9vdEhlaWdodCAhPT0gJCgnI21hc3Rmb290Jykub3V0ZXJIZWlnaHQoKSlcbiAgICAgICAgICAgICAgICAgICAgJCgnLnNpdGUtZm9vdGVyLXBhZGRpbmcnKS5oZWlnaHQoJCgnI21hc3Rmb290Jykub3V0ZXJIZWlnaHQoKSk7XG5cbiAgICAgICAgICAgICAgICAkKCcuc2Nyb2xsLWFuaW1hdGlvbnMgLmFuaW1hdGVkJykuZWFjaChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChpc1Njcm9sbGVkSW50b1ZpZXcodGhpcykgPT09IHRydWUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICQodGhpcykucmVtb3ZlQ2xhc3MoJ2ludmlzaWJsZScpLmFkZENsYXNzKCQodGhpcykuZGF0YSgnY2xhc3MtaW4nKSk7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIGlmKCAkKCdib2R5LnNpbmdsZScpLmxlbmd0aCApIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnLmVudHJ5LWNvbnRlbnQgLmhlYWRpbmcnKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGlmIChpc1Njcm9sbGVkSW50b1ZpZXcodGhpcykgPT09IHRydWUpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKCcuanVtYm90cm9uJykuYWRkQ2xhc3MoJ2ZvbycpO1xuICAgICAgICAgICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBpZiAoJCh0aGlzKS5zY3JvbGxUb3AoKSA+ICgkKHdpbmRvdykuaW5uZXJIZWlnaHQoKSkpIHtcbiAgICAgICAgICAgICAgICAgICAgJCgnI21hc3Rmb290JykucmVtb3ZlQ2xhc3MoJ2ludmlzaWJsZScpO1xuICAgICAgICAgICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICAgICAgICAgICQoJyNtYXN0Zm9vdCcpLmFkZENsYXNzKCdpbnZpc2libGUnKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIH0pO1xuXG5cbiAgICAgICAgICAgIC8qdmFyIG1sNCA9IHt9O1xuICAgICAgICAgICAgbWw0Lm9wYWNpdHlJbiA9IFswLDFdO1xuICAgICAgICAgICAgbWw0LnNjYWxlSW4gPSBbMC4yLCAxXTtcbiAgICAgICAgICAgIG1sNC5zY2FsZU91dCA9IDM7XG4gICAgICAgICAgICBtbDQuZHVyYXRpb25JbiA9IDgwMDtcbiAgICAgICAgICAgIG1sNC5kdXJhdGlvbk91dCA9IDYwMDtcbiAgICAgICAgICAgIG1sNC5kZWxheSA9IDUwMDtcblxuICAgICAgICAgICAgYW5pbWUudGltZWxpbmUoe2xvb3A6IHRydWV9KVxuICAgICAgICAgICAgICAgIC5hZGQoe1xuICAgICAgICAgICAgICAgICAgICB0YXJnZXRzOiAnLm1sNCAubGV0dGVycy0xJyxcbiAgICAgICAgICAgICAgICAgICAgb3BhY2l0eTogbWw0Lm9wYWNpdHlJbixcbiAgICAgICAgICAgICAgICAgICAgc2NhbGU6IG1sNC5zY2FsZUluLFxuICAgICAgICAgICAgICAgICAgICBkdXJhdGlvbjogbWw0LmR1cmF0aW9uSW5cbiAgICAgICAgICAgICAgICB9KS5hZGQoe1xuICAgICAgICAgICAgICAgIHRhcmdldHM6ICcubWw0IC5sZXR0ZXJzLTEnLFxuICAgICAgICAgICAgICAgIG9wYWNpdHk6IDAsXG4gICAgICAgICAgICAgICAgc2NhbGU6IG1sNC5zY2FsZU91dCxcbiAgICAgICAgICAgICAgICBkdXJhdGlvbjogbWw0LmR1cmF0aW9uT3V0LFxuICAgICAgICAgICAgICAgIGVhc2luZzogXCJlYXNlSW5FeHBvXCIsXG4gICAgICAgICAgICAgICAgZGVsYXk6IG1sNC5kZWxheVxuICAgICAgICAgICAgfSkuYWRkKHtcbiAgICAgICAgICAgICAgICB0YXJnZXRzOiAnLm1sNCAubGV0dGVycy0yJyxcbiAgICAgICAgICAgICAgICBvcGFjaXR5OiBtbDQub3BhY2l0eUluLFxuICAgICAgICAgICAgICAgIHNjYWxlOiBtbDQuc2NhbGVJbixcbiAgICAgICAgICAgICAgICBkdXJhdGlvbjogbWw0LmR1cmF0aW9uSW5cbiAgICAgICAgICAgIH0pLmFkZCh7XG4gICAgICAgICAgICAgICAgdGFyZ2V0czogJy5tbDQgLmxldHRlcnMtMicsXG4gICAgICAgICAgICAgICAgb3BhY2l0eTogMCxcbiAgICAgICAgICAgICAgICBzY2FsZTogbWw0LnNjYWxlT3V0LFxuICAgICAgICAgICAgICAgIGR1cmF0aW9uOiBtbDQuZHVyYXRpb25PdXQsXG4gICAgICAgICAgICAgICAgZWFzaW5nOiBcImVhc2VJbkV4cG9cIixcbiAgICAgICAgICAgICAgICBkZWxheTogbWw0LmRlbGF5XG4gICAgICAgICAgICB9KS5hZGQoe1xuICAgICAgICAgICAgICAgIHRhcmdldHM6ICcubWw0IC5sZXR0ZXJzLTMnLFxuICAgICAgICAgICAgICAgIG9wYWNpdHk6IG1sNC5vcGFjaXR5SW4sXG4gICAgICAgICAgICAgICAgc2NhbGU6IG1sNC5zY2FsZUluLFxuICAgICAgICAgICAgICAgIGR1cmF0aW9uOiBtbDQuZHVyYXRpb25JblxuICAgICAgICAgICAgfSkuYWRkKHtcbiAgICAgICAgICAgICAgICB0YXJnZXRzOiAnLm1sNCAubGV0dGVycy0zJyxcbiAgICAgICAgICAgICAgICBvcGFjaXR5OiAwLFxuICAgICAgICAgICAgICAgIHNjYWxlOiBtbDQuc2NhbGVPdXQsXG4gICAgICAgICAgICAgICAgZHVyYXRpb246IG1sNC5kdXJhdGlvbk91dCxcbiAgICAgICAgICAgICAgICBlYXNpbmc6IFwiZWFzZUluRXhwb1wiLFxuICAgICAgICAgICAgICAgIGRlbGF5OiBtbDQuZGVsYXlcbiAgICAgICAgICAgIH0pLmFkZCh7XG4gICAgICAgICAgICAgICAgdGFyZ2V0czogJy5tbDQnLFxuICAgICAgICAgICAgICAgIG9wYWNpdHk6IDAsXG4gICAgICAgICAgICAgICAgZHVyYXRpb246IDUwMCxcbiAgICAgICAgICAgICAgICBkZWxheTogNTAwXG4gICAgICAgICAgICB9KTsqL1xuICAgICAgICB9XG5cbiAgICB9O1xufSkoalF1ZXJ5KTtcbiJdLCJmaWxlIjoiYnVuZGxlLmpzIn0=
