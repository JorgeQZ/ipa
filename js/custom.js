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

    $('.cont_search').on('click', function (e) {
        e.preventDefault();
        $('.search-bar').toggleClass('active');
    });

    $('.single-gaceta-item').on('click', function (e) {
        e.preventDefault();
        console.log($(this));

        console.log($(this).attr('data-link'));
        console.log($(this).attr('data-image'));
        console.log($(this).attr('data-description'));

        $('.single-gaceta-main-img img').attr('src', $(this).attr('data-image'));
        $('.single-gaceta-main-button').attr('href', $(this).attr('data-link'));
        $('.single-gaceta-main-text').html($(this).attr('data-description'));

        // console.log(img);
    });
});