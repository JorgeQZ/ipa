$ = jQuery;

$(document).ready(function () {
    $('.cate-button').on('click', function (e) {
        console.log($(this).attr('data'));
    });

    function change_cat(category) {
        var data = {
            action: 'change_category',
            categoria: cat,
        }
        $.ajax({
            type: "post",
            url: ajax_var.url,
            data: parameters,
            dataType: 'JSON',
            success: function (response) {

                response.forEach(function (element, index) {
                    $('#anios').append(element);
                });

            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    }
});