<?php

function edit_spaces(string $str)
{
    $result = '';
    $pattern = '/[\h]{2,}|[\v]{1,}/';
    $result = preg_replace($pattern, ' ', $str);

    return $result;
}

$string = "dfdsf 1sdf  2sdfsdfds   3fdsfsf


dsfdsf";

var_dump ($string);
var_dump (edit_spaces($string));