$ = jQuery;

$(document).ready(function () {
    let _categoria = '';
    $(document).on('click', '.single-gaceta-item', function (e) {
        e.preventDefault();

        $('.single-gaceta-main-img img').attr('src', $(this).attr('data-image'));
        $('.single-gaceta-main-button').attr('href', $(this).attr('data-link'));
        $('.single-gaceta-main-text').html($(this).attr('data-description'));

        if (window.innerWidth <= 1023) $('html,body').animate({ scrollTop: $(".post-item").offset().top }, 'slow');
    });

    $('.cate-button').on('click', function (e) {
        e.stopPropagation();
        $('.cate-button').removeClass('active');
        $(this).addClass('active');
        _categoria = $(this).attr('data-cat');
        change_cat(_categoria);
    });

    $('.year-button').on('change', function (e) {
        $(this).addClass('active');
        let _year = $(this).val();
        console.log(_year);
        let _cat = $('.cate-button.active').attr('data-cat');
        getMonths(_cat, _year);

        $(".single-gaceta-item").show();
        $(".single-gaceta-item:not([data-date_year='" + _year + "'])").hide();
        $(".single-gaceta-item[data-date_year='" + _year + "']").show();

    });

    $('.month-button').on('change', function (e) {
        $(this).addClass('active');
        let _date_month = $(this).val();

        $(".single-gaceta-item:not([data-date_month='" + _date_month + "'])").hide();
        $(".single-gaceta-item[data-date_month='" + _date_month + "']").show();
    });

    function change_cat(category) {

        var data = {
            action: 'change_category',
            categoria: category,
        }
        $.ajax({
            type: "post",
            url: ajax_var.url,
            data: data,
            dataType: 'JSON',
            success: function (response) {
                if (response) {
                    $('.grid-list').empty();
                    response.forEach(function (element, index) {
                        let html = `<div
                        data-date_year="`+ element.post_date_year + `"
                        data-date_month="`+ element.post_date_month + `"
                        data-date="`+ element.post_date + `"
                        data-link="`+ element.post_link + `"
                        data-image="`+ element.post_image + `"
                        data-description="`+ element.post_description + `"
                        class="item single-gaceta-item"
                        style="background-image: url(`+ element.post_image + `)">
                            <div class="overlay"></div>
                            <div class="title">`+ element.post_title + `</div>
                            <div class="desc">`+ element.post_date + `</div>
                        </div>`;
                        $('.grid-list').append(html);
                    });

                    getYears(category);
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

    function getYears(categoria = null) {

        var data = {
            action: 'get_years',
            categoria: categoria,
        }

        $.ajax({
            type: "post",
            url: ajax_var.url,
            data: data,
            dataType: 'JSON',
            success: function (response) {

                $('.year-button').empty().removeClass('active');
                $('.month-button').removeClass('active');
                if (response) {
                    response.forEach(function (element, index) {
                        $('.year-button').append(element)
                    });
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

    function getMonths(cat = null, year = null) {

        var data = {
            action: 'get_months',
            categoria: cat,
            year: year
        }

        $.ajax({
            type: "post",
            url: ajax_var.url,
            data: data,
            dataType: 'JSON',
            success: function (response) {

                $('.month-button').empty().removeClass('active');
                if (response) {
                    response.forEach(function (element, index) {
                        $('.month-button').append(element)
                    });
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

});