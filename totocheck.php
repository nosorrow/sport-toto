<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Спорт Тото</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        input[type=number] {
            height: 80px !important;
            width: 110px;
            font-size: 3rem;
            text-align: center !important;
            background-color: #98b8b2;
        }

        .styled {
            width: 20rem;
            height: 5rem;
            font-size: 2rem;
        }
        .table {
            font-size: 120%;
        }
    </style>
</head>
<body>
<div class="modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Спорт тото архив</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">6 / 49 <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container mb-2">
    <div class="row mt-3 mb-1">
        <div class="col-md-12 col-xs-12 text-center">
            <h2>Проверка на комбинация в играта 6 / 49</h2>
        </div>
    </div>
    <form action="" method="post" id="checkform">
        <div class="row mb-4">
            <div class="col-md-2 col-xs-6">
                <input type="number" name="one" id="one" min="1" max="49">
            </div>
            <div class="col-md-2 col-xs-6">
                <input type="number" name="two" id="two" min="1" max="49">
            </div>
            <div class="col-md-2 col-xs-6">
                <input type="number" name="three" id="three" min="1" max="49">
            </div>
            <div class="col-md-2 col-xs-6">
                <input type="number" name="four" id="four" min="1" max="49">
            </div>
            <div class="col-md-2 col-xs-6">
                <input type="number" name="five" id="five" min="1" max="49">
            </div>
            <div class="col-md-2 col-xs-6">
                <input type="number" name="six" id="six" min="1" max="49">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dismissible alert-danger text-center" id="alert-error"
                     style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p id="error"></p>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 col-xs-12 text-center">
                <input type="submit" value="ПРОВЕРИ" class="btn btn-dark styled">
            </div>
        </div>
    </form>
</div>
<div class="container mb-3">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card text-white bg-secondary  h-100 justify-content-center">
                <div class="card-header">ЧИСЛА : <span id="draw">[ 4 ] [ 5 ] [ 45 ] [ 33 ] [ 22 ]</span></div>
                <div class="card-body">
                    <h4 class="card-title">резултат от 1958 - 2018 г.</h4>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">числа</th>
                            <th scope="col">брой печалби</th>
                            <th scope="col">числа</th>
                            <th scope="col">брой печалби</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="table-active">
                            <th scope="row">6 числа</th>
                            <td id="six-draw">-</td>
                            <th scope="row">4 числа</th>
                            <td id="four-draw">-</td>
                        </tr>
                        <tr>
                            <th scope="row">5 числа</th>
                            <td id="five-draw">-</td>
                            <th scope="row">3 числа</th>
                            <td id="three-draw">-</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $('#checkform').on('submit', function (e) {
        e.preventDefault();
        let formdata = $(this).serialize();

        $.ajax({
            url: "getdata.php",
            method: 'POST',
            dataType: 'json',
            data: formdata

        }).done(function (result) {
            if(result.error){
                $('#alert-error').show();
                $('#error').html(result.error);

            } else {
                $('#six-draw').html(result.six);
                $('#five-draw').html(result.five);
                $('#four-draw').html(result.four);
                $('#three-draw').html(result.three);
            }

        });
    })
</script>
</body>
</html>