$(function() {
    $('.nav-btn').on('click', function() {
        if ($(this).hasClass('active')) {
            $('.nav-slidebar').stop();
            $('.nav-slidebar').slideUp();
            $(this).removeClass('active');
        }else {
            $('.nav-slidebar').stop();
            $('.nav-slidebar').slideDown();
            $(this).addClass('active');
        }
    });

});