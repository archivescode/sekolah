(function($) {
    $(".sub-menu li").on('mouseenter mouseleave', function (e) {
        if ($('ul', this).length) {
            var elm = $('ul', this);
            var off = elm.offset();
            var l = off.left;
            var w = elm.width();
            var docH = $("body").height();
            var docW = $("body").width();

            var isEntirelyVisible = (l + w <= docW);

            if (!isEntirelyVisible) {
                $(this).addClass('menu-hover-left');
            } else {
                $(this).removeClass('menu-hover-left');
            }
        }
    });
})(jQuery);