<?php

include_once "10_multistrings_txtlib.php";
$txt = '
Пример строки ;
охватывающей 3 строки;
с использованием синтаксиса php.
';
// $txt = 'This is 4 words.';
$words = txt_get_words_cnt($txt);
echo $words;
