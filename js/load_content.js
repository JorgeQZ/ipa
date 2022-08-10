$ = jQuery;

$(document).ready(function () {
    let _categoria = '';
    $(document).on('click', '.single-gaceta-item', function (e) {
        e.preventDefault();

        $('.single-gaceta-main-img img').attr('src', $(this).attr('data-image'));
        $('.single-gaceta-main-button').attr('href', $(this).attr('data-link'));
        $('.single-gaceta-main-text').html($(this).attr('data-description'));

    });

    $('.year-button').on('click', function (e) {
        e.preventDefault();

        $('.year-options').slideToggle();
        $('.month-options').slideUp();
    });

    $('.month-button').on('click', function (e) {
        e.preventDefault();
        $('.year-options').slideUp();

        $('.month-options').slideToggle();
    });

    $(document).on('click', '.year-option', function (e) {
        e.preventDefault();
        console.log($(this).text());
    });

    $('.cate-button').on('click', function (e) {
        e.stopPropagation();
        $('.cate-button').removeClass('active');
        $(this).addClass('active');
        _categoria = $(this).attr('data-cat');
        change_cat(_categoria);
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
                console.log(response);
                if (response) {
                    $('.grid-list').empty();
                    response.forEach(function (element, index) {
                        // $('#anios').append(element);
                        let html = `<div
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
        console.log(categoria);
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
                console.log(response);
                $('.year-options').empty();
                if (response) {
                    response.forEach(function (element, index) {
                        $('.year-options').append(element)
                    });
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

    function getMonths(params) {

    }

});