$('.open-popup').click(function(e) {
    e.preventDefault();
    $('.popup-bg').fadeIn(800);
});

$('.close-popup').click(function() {
    $('.popup-bg').fadeOut(800);
});