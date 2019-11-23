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

    $(document).ready(function() {
        setTimeout(function() {
            $('.welcome').fadeOut(1000);
            $.cookie('admin-welcome', true, {expires: 1});
        }, 2000);
    });

    $('.admin-left .level-1 .nav-le1-title').on('click', function() {
        $(this).next('.level-2').slideToggle();
    });

});