<?php

$f = function () {
    return rand(10, 20);
};
echo $f();

echo "<br>";

$min = 5;
$max = 10;
$f = function () use ($min, $max) { //use используется только в анонимных функциях
    return rand(10, 20);
};
echo $f();