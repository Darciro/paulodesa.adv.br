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
        }

    };
})(jQuery);

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJidW5kbGUuanMiXSwic291cmNlc0NvbnRlbnQiOlsiKGZ1bmN0aW9uICgkKSB7XHJcbiAgICAndXNlIHN0cmljdCc7XHJcbiAgICB2YXIgdmFycyA9IHtcclxuICAgICAgICBtYXN0Zm9vdEhlaWdodDogMFxyXG4gICAgfTtcclxuXHJcbiAgICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgcGRzLmluaXQoKTtcclxuICAgIH0pO1xyXG5cclxuICAgIHZhciBwZHMgPSB7XHJcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICB0aGlzLnV0aWxzKCk7XHJcbiAgICAgICAgICAgIHRoaXMubWVudSgpO1xyXG4gICAgICAgICAgICB0aGlzLmFuaW1hdGlvbigpO1xyXG4gICAgICAgIH0sXHJcblxyXG4gICAgICAgIHV0aWxzOiBmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgIHZhcnMubWFzdGZvb3RIZWlnaHQgPSAkKCcjbWFzdGZvb3QnKS5vdXRlckhlaWdodCgpO1xyXG4gICAgICAgICAgICAkKCcuc2l0ZS1mb290ZXItcGFkZGluZycpLmhlaWdodCh2YXJzLm1hc3Rmb290SGVpZ2h0KTtcclxuICAgICAgICB9LFxyXG5cclxuICAgICAgICBtZW51OiBmdW5jdGlvbiAoKSB7IH0sXHJcblxyXG4gICAgICAgIGFuaW1hdGlvbjogZnVuY3Rpb24gKCkge1xyXG5cclxuICAgICAgICAgICAgLy8gQ2hlY2sgaWYgZWxlbWVudCBpcyBzY3JvbGxlZCBpbnRvIHZpZXdcclxuICAgICAgICAgICAgZnVuY3Rpb24gaXNTY3JvbGxlZEludG9WaWV3KGVsZW0pIHtcclxuICAgICAgICAgICAgICAgIHZhciBkb2NWaWV3VG9wID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xyXG4gICAgICAgICAgICAgICAgdmFyIGRvY1ZpZXdCb3R0b20gPSBkb2NWaWV3VG9wICsgJCh3aW5kb3cpLmhlaWdodCgpO1xyXG5cclxuICAgICAgICAgICAgICAgIHZhciBlbGVtVG9wID0gJChlbGVtKS5vZmZzZXQoKS50b3A7XHJcbiAgICAgICAgICAgICAgICB2YXIgZWxlbUJvdHRvbSA9IGVsZW1Ub3AgKyAkKGVsZW0pLmhlaWdodCgpO1xyXG5cclxuICAgICAgICAgICAgICAgIHJldHVybiAoKGVsZW1Cb3R0b20gPD0gZG9jVmlld0JvdHRvbSkgJiYgKGVsZW1Ub3AgPj0gZG9jVmlld1RvcCkpO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAkKHdpbmRvdykuc2Nyb2xsKGZ1bmN0aW9uICgpIHtcclxuXHJcbiAgICAgICAgICAgICAgICBpZiggJCh0aGlzKS5zY3JvbGxUb3AoKSA+IDEgKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgJCgnLnNjcm9sbC1kb3duJykuZmFkZU91dCgpO1xyXG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICAkKCcuc2Nyb2xsLWRvd24nKS5mYWRlSW4oKTtcclxuICAgICAgICAgICAgICAgIH1cclxuXHJcbiAgICAgICAgICAgICAgICBpZiAodmFycy5tYXN0Zm9vdEhlaWdodCAhPT0gJCgnI21hc3Rmb290Jykub3V0ZXJIZWlnaHQoKSlcclxuICAgICAgICAgICAgICAgICAgICAkKCcuc2l0ZS1mb290ZXItcGFkZGluZycpLmhlaWdodCgkKCcjbWFzdGZvb3QnKS5vdXRlckhlaWdodCgpKTtcclxuXHJcbiAgICAgICAgICAgICAgICAkKCcuc2Nyb2xsLWFuaW1hdGlvbnMgLmFuaW1hdGVkJykuZWFjaChmdW5jdGlvbiAoKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgaWYgKGlzU2Nyb2xsZWRJbnRvVmlldyh0aGlzKSA9PT0gdHJ1ZSkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAkKHRoaXMpLnJlbW92ZUNsYXNzKCdpbnZpc2libGUnKS5hZGRDbGFzcygkKHRoaXMpLmRhdGEoJ2NsYXNzLWluJykpO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgIH0pO1xyXG5cclxuICAgICAgICAgICAgICAgIGlmKCAkKCdib2R5LnNpbmdsZScpLmxlbmd0aCApIHtcclxuICAgICAgICAgICAgICAgICAgICAkKCcuZW50cnktY29udGVudCAuaGVhZGluZycpLmVhY2goZnVuY3Rpb24gKCkge1xyXG4gICAgICAgICAgICAgICAgICAgICAgICBpZiAoaXNTY3JvbGxlZEludG9WaWV3KHRoaXMpID09PSB0cnVlKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkKCcuanVtYm90cm9uJykuYWRkQ2xhc3MoJ2ZvbycpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICAgICAgaWYgKCQodGhpcykuc2Nyb2xsVG9wKCkgPiAoJCh3aW5kb3cpLmlubmVySGVpZ2h0KCkpKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgJCgnI21hc3Rmb290JykucmVtb3ZlQ2xhc3MoJ2ludmlzaWJsZScpO1xyXG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICAkKCcjbWFzdGZvb3QnKS5hZGRDbGFzcygnaW52aXNpYmxlJyk7XHJcbiAgICAgICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICB9KTtcclxuICAgICAgICB9XHJcblxyXG4gICAgfTtcclxufSkoalF1ZXJ5KTtcclxuIl0sImZpbGUiOiJidW5kbGUuanMifQ==
