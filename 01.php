<?php
    echo "Task 1";
    echo "<br>";

    $name = "Дмитрий";
    $age = 33;

    echo "Меня зовут ".$name."<br>";
    echo "Мне ".$age ." года"."<br>"."<br>";

    echo "Task 2"."<br>";

    $a = 10;
    $S = 1 / 4 * pow($a, 2) * sqrt(3);
    echo "a = ".$a."<br>";
    echo "S = ".$S."<br>"."<br>";

    echo "Task 3"."<br>";

    $a = 3;
    $b = 2;
    $c = 1;

    if ($a < $c) {
        $x = $a + $b / $c * $a;
    }elseif ($a == $c) {
        $x = 100;
    }else {
        $x = $c * 3 * $b + $c / $c * sqrt($c);
    }
    echo "x = ".$x;
?>