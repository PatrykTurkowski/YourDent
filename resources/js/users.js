$(document).ready(function () {
    function fetch_data(page) {
        $.ajax({
            url: "/users_ajax?page=" + page,
            success: function (data) {
                $('.x_content tbody').html(data);

            }
        })
    }

    $(document).on('click', '.exam a', function (e) {
        e.preventDefault();
        const page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    })

    $(document).on('click', '.delete', function () {
        const page = $('li.active span.page-link').text();

        $.ajax({

            url: "/users/" + $(this).val()
                + "?page=" + page
            // 
            ,
            data: [hide => $(this).val()],
            success: function (data) {
                $('.x_content tbody').html(data);

            }

        })

    })

});

