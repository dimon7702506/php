<?php

include "10_scandir.php";

/*$temp = 'gfgfgd fsfsfsdf
erfefwfwefEE';*/

$pattern_split = '/[\v,]{1,}/';
$str_split = preg_split($pattern_split, $str);
//print_r($str_split);

echo "<h3>Result:</h3>;";

foreach ($str_split as $str_spl) {
    //var_dump($str_spl);
    $pattern = '/[A-Z]$/';
    if (preg_match($pattern, $str_spl)) {
        print_r($str_spl);
        echo "<br>";
    }
}

echo "<h3>Begin data:</h3>";
print_r($str);