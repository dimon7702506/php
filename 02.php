<h2>Задание на условие</h2>
<h3>Задание 1:</h3>

<?php
    $age = rand(-10, 100);
    echo "age = ".$age."<br>";
?>

<h3>Задание 2:</h3>

<?php
    if ($age >= 18 && $age <= 59){
        echo "Вам еще работать и работать!"."<br>";
    }elseif ($age > 59){
        echo "Вам пора на пенсию!"."<br>";
    }elseif ($age >= 1 && $age <= 17){
        echo "Вам еще рано работать!"."<br>";
    }else {
        echo "Неизвестный возраст"."<br>";
    }
?>

<h2>Задание на циклы</h2>
<h3>Задание 1:</h3>

<?php
    $cols = rand(1, 10);
    $rows = rand(1, 10);

    echo "cols = ".$cols."<br>";
    echo "rows = ".$rows."<br>";
?>

<h3>Задание 2 и 3:</h3>

<?php
    $table = '<table cellpadding="7"; border="1">';
        for ($tr = 1; $tr <= $rows; $tr++){
            $table .= '<tr>';
                for ($td = 1; $td <= $cols; $td++){
                    if ($tr===1 or $td===1) {
                        $table .= '<td align="center"; bgcolor = "green"> <strong>' . $tr * $td . '</strong></td>';
                    }else {
                        $table .= '<td>' . $tr * $td . '</td>';
                    }
                }
            $table .= '</tr>';
        }
    $table .= '</table>';
    echo $table;
?>

<h3>Задание 4:</h3>

<?php
    for ($count = 1; $count <=50; $count++){
        if ($count % 2 > 0) {
            echo $count."<br>";
        }
    }
?>

<h2>Задача на попадание точки в область</h2>
<p><img src="images/HW.jpg" width="400" height="300"></p>

<?php
    $x = rand(-2, 2) + rand(1, 9) / 10;
    $y = rand(-2, 2) + rand(1, 9) / 10;

    echo "Координаты точки: (".$x."; ".$y.")"."<br>";

    $temp = "Не попадает";

    if ($x <= 0 && $y <= 0) {
        if ((2 * $x + 2 * $y) >= -4){
            $temp = "Попадает";
        }
    }else {
        if ((pow($x,2) + pow($y, 2)) <= 1 ) {
            $temp = "Попадает";
        }
    }
    echo $temp;
?>
