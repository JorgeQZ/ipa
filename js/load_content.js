$ = jQuery;

$(document).ready(function () {

    $(document).on('click', '.single-gaceta-item', function (e) {
        e.preventDefault();

        $('.single-gaceta-main-img img').attr('src', $(this).attr('data-image'));
        $('.single-gaceta-main-button').attr('href', $(this).attr('data-link'));
        $('.single-gaceta-main-text').html($(this).attr('data-description'));

    });

    $('.year-button').on('click', function (e) {
        console.log($(this));
        $('.year-option').slideToggle();
        $('.month-option').slideUp();
    });

    $('.month-button').on('click', function (e) {
        console.log($(this));
        $('.year-option').slideUp();

        $('.month-option').slideToggle();
    });

    $('.cate-button').on('click', function (e) {
        e.stopPropagation();
        $('.cate-button').removeClass('active');
        $(this).addClass('active');
        let cat = $(this).attr('data-cat');
        change_cat(cat);
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
                }

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }

    function getYears(params) {
    }
    function getMonths(params) {

    }
});