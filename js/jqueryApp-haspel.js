$(document).ready(function () {
    $('#checkform').on('submit', function (e) {
        e.preventDefault();

        var formdata = $(this).serializeArray();
        $("#draw").html("");

        jQuery.each(formdata, function (i, field) {
            if (field.name !== 'igra') {
                $("#draw").append('<span class="ball">' + field.value + '</span>');

            }
        });

        var row = $("table").find('tr');
        row.removeClass('table-success');

        $.ajax({
            url: "getdata.php",
            method: 'POST',
            dataType: 'json',
            data: formdata

        }).done(function (result) {
            if (result.error) {
                $('#alert-error').show();
                $('#error').html(result.error);

            } else {

                if (result.six > 0) {
                    $('#six-tr').addClass('table-success');
                }

                if (result.five > 0) {
                    $('#five-tr').addClass('table-success');
                }

                if (result.four > 0) {
                    $('#four-tr').addClass('table-success');
                }

                if (result.three > 0) {
                    $('#three-tr').addClass('table-success');
                }

                $('#six-td').html(result.six);
                $('#five-td').html(result.five);
                $('#four-td').html(result.four);
                $('#three-td').html(result.three).addClass('table-active');

                $('#resultModal').modal('show');
                $('#checkform')[0].reset();
            }

        });
    })

    $('input[type=number]').on('change', function () {
        $('#alert-error').hide();
    })
})