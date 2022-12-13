window.onbeforeunload = function () {
    window.addEventListener("pageshow", function (event) {
        var historyTraversal = event.persisted ||
            (typeof window.performance != "undefined" &&
                window.performance.navigation.type === 2);
        if (historyTraversal) {
            // Handle page restore.
            window.location.reload();
        }
    });
}();


$(document).ready(function () {
    function fetch_data(page) {
        $.ajax({
            url: "/terms_ajax?page=" + page,
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


    // ----------------------------------------- //


    $(document).on('click', '.hide', function () {
        const page = $('li.active span.page-link').text();

        $.ajax({

            url: "/terms_hide/" + $(this).val()
                + "?page=" + page
            // 
            ,
            data: [hide => $(this).val()],
            success: function (data) {
                $('.x_content tbody').html(data);

            }

        })

    })
    $(document).on('click', '.delete', function () {
        const page = $('li.active span.page-link').text();

        $.ajax({

            url: "/terms/" + $(this).val()
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


