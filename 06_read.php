<?php

function readFromFile(): void
{
    $file  = fopen(FILE_NAME, 'r');

    echo "<br>";
    echo "<h4>Данные из файла:</h4>";

    while ($row = fgetcsv($file)){
        foreach ($row as $element){
            echo $element . "<br>";
        }
    }
    fclose($file);
}

if (isset($_POST['read'])) {
    readFromFile();
}