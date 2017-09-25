<?php

function saveToFile(string $firstName, string $lastName, string $position): void
{
    $list = [$firstName, $lastName, $position];
    $file = fopen(FILE_NAME, 'w+');
    //var_dump($list);
    fputcsv($file, $list);
    fclose($file);
}

if (isset($_POST['submit'])) {
    if(!isset($_POST['firstName'])){
        echo("Не передано поле Имя");
    }elseif (!isset($_POST['lastName'])){
        echo("Не передано поле Фамилия");
    }elseif (!isset($_POST['position'])){
        echo("Не передано поле Должность");
    }elseif (!$_POST['firstName']){
        echo("Пустое значение поля Имя");
    }elseif (!$_POST['lastName']){
        echo("Пустое значение поля Фамилия");
    }elseif (!$_POST['position']){
        echo("Пустое значение поля Должность");
    }else {
        saveToFile( $_POST['firstName'], $_POST['lastName'], $_POST['position']);
        //header("Location: http://homework.com/06.php");
    }
}

