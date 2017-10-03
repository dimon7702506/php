<?php

// Запись в файл
$list = [
    [
        'first_name' => 'Ivan',
        'last_name' => 'Ivanov',
    ],
    [
        'first_name' => 'Petr',
        'last_name' => 'Petrov'
    ],
];

$file = fopen('file.csv', 'w+'); // w+ перезаписать файл
                                                // a+ добавить файл

//получение заголовков массива
$head_arr = [];
if (isset($list[0])) {
    $head_arr = array_keys(($list[0]));
}
//=============================

fputcsv($file, $head_arr);
foreach ($list as $person) {
    fputcsv($file, $person);
}
fclose($file);

// Чтение файлов

$file  = fopen('file.csv', 'r');

while ($row = fgetcsv($file)){
    var_dump($row);
}
fclose($file);

//посмотреть flock