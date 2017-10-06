<?php

function words_revers(string $string)
{
    $pattern_split = '/[\s,]{1,}/';
    $str_split = preg_split($pattern_split, $string);

    $result ='';

    $array = array_reverse($str_split);
    foreach ($array as $str){
        $result .= $str . ' ';
    }
    return $result;
}

$string = "Написать ф-ю для обратной перестановка строки по словам при помощи цикла";

echo "Строка: " . $string . "<br>";
echo "Результат: " . words_revers($string);