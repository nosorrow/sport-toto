async function generator(n, e) {
    e.preventDefault();
    $("#draw1").html("");
    var row = $("table").find('tr');
    row.removeClass('table-success');
    if (n == 535) {
        $("#six-tr-g").hide();
    } else {
        $("#six-tr-g").show();
    }

 //   res.done(function (result) {
    let response  = await fetch('generator.php?igra='+n);
    let result = await response.json();

    jQuery.each(result.kombinacia, function (i, field) {
            $("#draw1").append('<span class="ball">' + field + '</span>');
        });

        if (result.statistics) {
            if (result.statistics.six > 0) {
                $('#six-tr-g').addClass('table-success');
            }

            if (result.statistics.five > 0) {
                $('#five-tr-g').addClass('table-success');
            }

            if (result.statistics.four > 0) {
                $('#four-tr-g').addClass('table-success');
            }

            if (result.statistics.three > 0) {
                $('#three-tr-g').addClass('table-success');
            }
            console.log(result.statistics.three);

            $('#six-td-g').html(result.statistics.six);
            $('#five-td-g').html(result.statistics.five);
            $('#four-td-g').html(result.statistics.four);
            $('#three-td-g').html(result.statistics.three).addClass('table-active');

            $('#generatorModal').modal('show');

        }

   //   });

}


function getResult(n) {
    return $.ajax({
        url: "generator.php",
        method: "POST",
        dataType: "json",
        async: false,
        data: {igra: n}
    });
}
