<?php

function print_full_name (string $first_name, string $last_name): void
{
    echo $first_name . " " . $last_name;
    $first_name .= 'n';
}

$last_name = 'Ivanov';
$first_name = 'Iva';
print_full_name('Ivan', 'Ivanov');

echo "<br>";
$func = 'print_full_name'; //вызов функции через переменную
$func($first_name, $last_name);
//или
call_user_func('print_full_name', $first_name, $last_name);
?>