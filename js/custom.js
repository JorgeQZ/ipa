$ = jQuery;
$(document).ready(function () {

    // Mobile Menu
    $('.burguer-cont').on('click', function (e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $('.cont-menu-right').slideToggle();

    })

    $('.burguer-tabs').on('click', function (e) {
        e.preventDefault();
        console.log('hello');
        $(this).toggleClass('active');
        $('.tabs').slideToggle();

    })
});