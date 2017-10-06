<?php

include "./11_task4.html";

function generate(string $string, int $length)
{
    $string = str_replace(" ", "", $string);
    $result_string = '';

    for ($i = 1; $i <= $length; $i++) {
        $result_string .= $string{rand(0, strlen($string) - 1)};
    }
    return $result_string;
}

if(isset($_POST['submit'])){
    $string = $_POST['symbols'];
    $length = $_POST['length'];

    if ($length > 0) {
        $result = generate($string, $length);
        echo $result;
    }
}