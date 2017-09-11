<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<h3>Задание 1:</h3>
<?php

function numberToBoolean (float $number):bool
{
    return (boolean) $number;
}

$number = 0.1;

echo "Значение до преобразования: $number <br>";
echo "Значение после преобразования: ";
var_dump(numberToBoolean($number));
?>

<br>
<br>

<h3>Задание 2:</h3>

<form method = "post">
    <div class="container">
        <div class="form-group">
            <label>Имя</label>
            <input type="text" class="form-control" name="firstName" placeholder="Введите имя"
                   value="<?=isset($_POST['firstName'])? $_POST['firstName'] : ''?>">
        </div>
        <div class="form-group">
            <label>Фамилия</label>
            <input type="text" class = "form-control" name="lastName" placeholder="Введите фамилию"
                   value="<?=isset($_POST['lastName']) ? $_POST['lastName']: '' ?>">
        </div>
        <div class="form-group">
            <label>Должность</label>
            <input type="text" class="form-control" name="position" placeholder="Введите должность"
                   value="<?=isset($_POST['position']) ? $_POST['position'] : ''?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Отправить</button>
        <br> <br>
        <button type="submit" class="btn btn-primary" name="read" value="Submit">Прочесть файл</button>
    </div>
</form>
<?php
    define(FILE_NAME, "06_homework.csv");

    require_once "06_request.php";
    require_once "06_read.php";
?>

</body>