<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

define('INCLUDED', 1);

include_once 'counter.php';
//include_once 'checkUserSystem.php';
counter(649);

$filename = 'Class/cache649.php';
if (file_exists($filename)) {
    $modified =
        "последна актуализация на архива: " .
        date("d - m - Y", filemtime($filename));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>Спорт Тото</title>
  <meta property="og:title" content="Спорт тото архив - проверка на комбинация в различните игри"/>
  <meta property="og:type" content="article"/>
  <meta property="og:url" content="http://haspel.000webhostapp.com/sport-toto"/>
  <meta property="og:description" content="Спорт тото - проверка на комбинация в различните игри.
    Въведете Вашите любими числа и вижте, колко пъти и в какви комбинации са изтеглени.
    Използван е архивът на Български спортен тотализатор"/>
  <meta property="og:image" content="https://haspel.000webhostapp.com/sport-toto/screen.jpg"/>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
          crossorigin="anonymous"></script>
</head>
<body>
<!-- Modal Generator-->
<div class="modal fade" id="generatorModal" tabindex="-1" role="dialog" aria-labelledby="generatorModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="generatorModalLabel">Резултат</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card text-white bg-secondary  h-100 justify-content-center">
          <div class="card-header"><span id="draw1"></span></div>
          <div class="card-body">
            <div id="generator">

            </div>
            <table class="table table-hover">
              <thead>
              <tr>
                <th scope="col">комбинация</th>
                <th scope="col">брой печалби</th>
              </tr>
              </thead>
              <tbody>
              <tr id="six-tr-g">
                <th scope="row">6 числа</th>
                <td id="six-td-g">-</td>
              </tr>
              <tr id="five-tr-g">
                <th scope="row">5 числа</th>
                <td id="five-td-g">-</td>
              </tr>
              <tr id="four-tr-g">
                <th scope="row">4 числа</th>
                <td id="four-td-g">-</td>
              </tr>
              <tr id="three-tr-g">
                <th scope="row">3 числа</th>
                <td id="three-td-g">-</td>
              </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ЗАТВОРИ</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resultModalLabel">Резултат</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card text-white bg-secondary  h-100 justify-content-center">
          <div class="card-header">ЧИСЛА : <span id="draw"></span></div>
          <div class="card-body">
            <table class="table table-hover">
              <thead>
              <tr>
                <th scope="col">комбинация</th>
                <th scope="col">брой печалби</th>
              </tr>
              </thead>
              <tbody>
              <tr id="six-tr">
                <th scope="row">6 числа</th>
                <td id="six-td">-</td>
              </tr>
              <tr id="five-tr">
                <th scope="row">5 числа</th>
                <td id="five-td">-</td>
              </tr>
              <tr id="four-tr">
                <th scope="row">4 числа</th>
                <td id="four-td">-</td>
              </tr>
              <tr id="three-tr">
                <th scope="row">3 числа</th>
                <td id="three-td">-</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">ЗАТВОРИ</button>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
  <a class="navbar-brand" href="#"><span class="bg-primary igra">СПОРТ</span><span class="toto" ">ТОТО</span> архив</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
          aria-controls="navbarColor02"
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="totocheck.php">6 / 49 <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="totocheck-535.php">5 / 35</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="totocheck-642.php">6 / 42</a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <span class="nav-link">случайни числа </span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="generator(649, event)">6 / 49 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="generator(535, event)">5 / 35</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="generator(642, event)">6 / 42</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mb-1 mt-3">
  <div class="row mt-3 mb-1">
    <div class="col-md-12 col-xs-12 text-center">
      <h2><span style="padding: 12px 10px; display: inline-block">Проверка на комбинация в играта </span><span
                class="igra bg-primary">6 / 49</span></h2>
    </div>
  </div>
  <div class="row mt-2 mb-2">
    <div class="col text-center">
      <h5 class="text-warning">
        Въведете Вашите любими числа и вижте, колко пъти и в какви комбинации са изтеглени. Използван е архивът на
        Български спортен
        тотализатор
      </h5>
      <p><?php echo $modified; ?></p>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-dismissible alert-danger text-center" id="alert-error"
           style="display: none">
        <button type="button" class="close" onClick="$('#alert-error').hide()">&times;</button>
        <p id="error"></p>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <form action="" method="post" id="checkform">
    <div class="form-row form-row-styled">
      <input type="hidden" name="igra" value="649">

      <div class="form-group col-md-2 col-6">
        <input type="number" name="one" id="one" min="1" max="49" class="form-control" placeholder="25">
      </div>
      <div class="form-group col-md-2 col-6">
        <input type="number" name="two" id="two" min="1" max="49" class="form-control" placeholder="2">
      </div>
      <div class="form-group col-md-2 col-6">
        <input type="number" name="three" id="three" min="1" max="49" class="form-control" placeholder="18">
      </div>
      <div class="form-group col-md-2 col-6">
        <input type="number" name="four" id="four" min="1" max="49" class="form-control" placeholder="43">
      </div>
      <div class="form-group col-md-2 col-6">
        <input type="number" name="five" id="five" min="1" max="49" class="form-control" placeholder="33">
      </div>
      <div class="form-group col-md-2 col-6">
        <input type="number" name="six" id="six" min="1" max="49" class="form-control" placeholder="24">
      </div>
    </div>
    <div class="col-md-12 col-xs-12 text-center mt-2 mb-5">
      <input type="submit" value="ПРОВЕРИ" class=" form-control btn btn-dark styled">
    </div>
  </form>
</div>
<footer class="footer">
  <div class="container">
    <span class="text-muted">Made by <a href="mailto:plamenorama@gmail.com">Plamen Petkov</a></span>
  </div>
</footer>
<script src="js/jqueryApp.js"></script>
<script src="js/generatorApp.js"></script>
</body>
</html>
