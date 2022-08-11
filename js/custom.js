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


    $(document).on('click', '.button-calendar-tab', function(e){
        console.log($(this).attr('data-button-burguer'));
        $('.calendar-menu[data-menu-months="'+$(this).attr('data-button-burguer')+'"]').slideToggle();
    });

    $(document).on('click', '.calendar-option', function(e){
        $('.tab-calendar').hide();
        $('.tab-calendar[data-calendar-content="'+$(this).attr('data-button')+'"]').show();
        $('.calendar-menu[data-menu-months="'+$(this).attr('data-menu-calendar')+'"]').hide();
        $('span[data-selected-month="'+$(this).attr('data-selected-month')+'"]').text($(this).text());

    });

    $(document).on('click', '.tab-item', function(e){

        let tab_id = $(this).attr('id');
        console.log(tab_id);

        $('.tab-item').removeClass('active');
        $('.tab-content').removeClass('active');
        $('.tab-calendar-container').removeClass('active');

        $(this).addClass('active');
        $('.tab-content[data-tab-content="'+tab_id+'-content"]').addClass('active');
        $('.tab-calendar-container[data-calendar="'+tab_id+'-calendar"]').addClass('active');


    });
});