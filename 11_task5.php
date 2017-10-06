<?php

function array_sort($array, $type, $field_name)
{
    foreach ($array as $key => $value) {
        $field_n[$key] = $value['name'];
        $field_l[$key] = $value['lastname'];
    }

    if ($type == "asc") {
        if ($field_name == "name") {
            array_multisort($field_n, SORT_ASC, $field_l, SORT_ASC, $array);
        }elseif ($field_name == "lastname") {
            array_multisort($field_l, SORT_ASC, $field_n, SORT_ASC, $array);
        }
    }elseif ($type == "desc") {
        if ($field_name == "name") {
            array_multisort($field_n, SORT_DESC, $field_l, SORT_DESC, $array);
        }elseif ($field_name == "lastname") {
            array_multisort($field_l, SORT_DESC, $field_n, SORT_DESC, $array);
        }
    }

    return $array;
}

$array = [
    ['name' =>'Vasya', 'lastname' => 'Poopkin'],
    ['name' =>'Petya', 'lastname' => 'Boopkin'],
    ['name' =>'Doosya', 'lastname' => 'Boopkina'],
    ['name' =>'Masha', 'lastname' => 'Sidorova'],
    ];

echo "Начальный массив" . "<br>";
var_dump($array);

echo "Результат сортировки" . "<br>";
var_dump(array_sort($array, "asc", "name"));
var_dump(array_sort($array, "desc", "name"));
var_dump(array_sort($array, "asc", "lastname"));
var_dump(array_sort($array, "desc", "lastname"));