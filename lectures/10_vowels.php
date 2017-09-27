<?php

$str = 'Hello world';

function remove_vowels($str)
{
    $pattern = '#[oiuyea]#i';
    return preg_replace($pattern, '', $str);
}

var_dump(remove_vowels($str));