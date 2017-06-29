//Back to top
var offset = 300,
    offset_opacity = 1200,
    scroll_top_duration = 700,
    $back_to_top = $(".back-to-top");

$(window).scroll(function() {
    ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
    if ($(this).scrollTop() > offset_opacity) {
        $back_to_top.addClass('cd-fade-out');
    }
});

$back_to_top.on('click', function(event) {
    event.preventDefault();
    $('body,html').animate({
        scrollTop: 0,
    }, scroll_top_duration);
});