<?php
/**
 *  Калкулатор за нотариални такси
 * Date: 22.9.2018 г.
 * Time: 12:52 ч.
 *
 * до 100лв.    30лв.
 * от 101лв. до 1 000лв.        30лв.        + 1,5% за превишението над 100лв.
 * от 1 001лв. до 10 000лв.     43,50лв.    + 1,3% за превишението над 1000лв.
 * от 10 001лв. до 50 000лв.    160,50лв.    + 0.8% за превишението над 10 000лв.
 * от 50 001лв. до 100 000лв.   480,50лв.    + 0.5% за превишението над 50 000лв.
 * от 100 001лв. до 500 000лв.  730,50 лв.    + 0.2% за превишението над 100 000лв.
 * над 500 000лв.               1530,50лв.    +0,1% за превишението над 500 000лв, но не повече от 6000лв.
 */

?>
<?php

; ?>
<!DOCTYPE html>
<!--suppress ALL -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Title</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <style>
        .bordered{
            border: 1px solid #ccc;
            border-radius: 3px;
            margin: 10px 0;
            padding: 5px 10px 10px 10px;
            position: relative;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Калкулатор нотариални такси при покупка на жилище</h3>

            <form id="calculator" name="calc" class="bordered">
                <div class="form-group">
                    <select class="form-control" name="city" id="city">
                        <!--                        <option value="">изберете град</option>-->
                        <option value="2.5">София</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="form-group">
                            <input class="form-control" type="text" name="cost" id="cost" placeholder="Материален интерес в лева"/>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="form-group">
                            <input class="btn btn-default" type="submit" name="action" value="Изчисли" id="submit"/>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12">
                        <p id="error"></p>
                    </div>
                </div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Резултат</th>
                            <th> в лева</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="">Данъчна служба (местен данък = 2.5%)</td>
                            <td id="local-tax">0</td>
                        </tr>
                        <tr>
                            <td class="">Агенция вписвания (вписване)</td>
                            <td id="agency">0</td>
                        </tr>
                        <tr>
                            <td class="">Нотариална такса</td>
                            <td id="notary-fee">0</td>
                        </tr>
                        <tr>
                            <td class="">ДДС</td>
                            <td id="vat">0</td>
                        </tr>
                        <tr class="">
                            <td><strong>ОБЩО</strong></td>
                            <td id="total" style="font-weight: bold">0</td>
                        </tr>
                        </tbody>
                    </table>

            </form>

        </div>
    </div>
</div>
</body>
</html>
