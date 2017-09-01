<h3>Задание 1:</h3>

<?php
    $sum = 0;
    $i = 1;
    while ($i <= 112) {
        $sum += $i;
        $i += 3;
    }
    echo "Сумма = ".$sum."<br>";
?>

<h3>Задание 2:</h3>

<?php
    $n = 10;
    echo "n = ".$n."<br>";

    for ($i = 0; $i < $n; $i++) {
        if ($i % 2) {
            $array[$i] = 1;
        }else {
            $array[$i] = 0;
        }
    }

    foreach ($array as $key => $val) {
        echo "$val ";
    }
?>

<h3>Задание 3:</h3>

<?php
    $n = 10;
    echo "n = ".$n."<br>";

    for ($i = 0; $i < $n; $i++) {
        $array[$i] = pow($i, 2);
    }

    foreach ($array as $key => $val) {
        echo "$key => $val; ";
}
?>

<h3>Задание 4:</h3>

<?php
    $n = 5;
    echo "n = ".$n."<br>";

    for ($i = 0; $i < $n; $i++) {
        $array4[$i] = rand(1, 10);
    }

    foreach ($array4 as $key => $val) {
        echo "$key => $val <br>";
    }
?>

<h4>С помощью стандартных функций:</h4>
<?php
    echo "Сумма = ".array_sum($array4)."<br>";
    echo "Произведение = ".array_product($array4)."<br>";
?>

<h4>Без стандартных функций:</h4>
<?php
    $sum = 0;
    $proiz = 1;
    foreach ($array4 as $key => $val) {
        $sum += $val;
        $proiz *= $val;
    }
    echo "Сумма = ".$sum."<br>";
    echo "Произведение = ".$proiz."<br>";
?>

<h3>Задание 5:</h3>

<?php
    $n = 5;
    echo "n = ".$n."<br>";
    echo "Начальный массив:<br>";

    for ($i = 0; $i < $n; $i++) {
        $array5[$i] = rand(1, 4);
    }

    foreach ($array5 as $key => $val) {
        echo "$key => $val <br>";
    }

    echo "Результат:<br>";
    $arrayResult = array_unique($array5);
    foreach ($arrayResult as $key => $val) {
        echo "$key => $val <br>";
    }
?>

<h3>Задание 6:</h3>

<?php
    $n = 10;
    echo "n = ".$n."<br>";
    echo "Начальный массив:<br>";

    for ($i = 0; $i < $n; $i++) {
        $array6[$i] = rand(-10, 10);
    }

    foreach ($array6 as $key => $val) {
        echo "$key => $val <br>";
    }

    echo "Результат:<br>";

    $arrayResult6 = $array6;
    for ($i = 0; $i < $n; $i++) {
         if ($array6[$i] < 0 && ($i < $n - 1)) {
            $arrayResult6[$i + 1] = 0;
         }
    }

    foreach ($arrayResult6 as $key => $val) {
        echo "$key => $val <br>";
    }
?>

<h3>Задание 7:</h3>

<?php
    $bmw = [
        'model' => 'X5',
        'speed' => '120',
        'doors' => '5',
        'years' => '2006'
    ];
    $toyota = [
        'model' => 'Carina',
        'speed' => '130',
        'doors' => '4',
        'years' => '2007'
    ];
    $opel = [
        'model' => 'Corsa',
        'speed' => '140',
        'doors' => '5',
        'years' => '2007'
    ];

    echo "bmw";
    foreach ($bmw as $key => $val) {
        echo " - $val";
    }
    echo "<br>";

    echo "toyota";
    foreach ($toyota as $key => $val) {
        echo " - $val";
    }
    echo "<br>";

    echo "opel";
    foreach ($opel as $key => $val) {
        echo " - $val";
    }
?>

<h3>Задание 8:</h3>

<?php
    $cars = [
        'bmw-X5' => [
            'name' => 'bmw',
            'model' => 'X5',
            'speed' => '120',
            'doors' => '5',
            'years' => '2006'
            ],
        'toyota' => [
            'name' => 'toyota',
            'model' => 'Carina',
            'speed' => '130',
            'doors' => '4',
            'years' => '2007'
            ],
        'opel' => [
            'name' => 'opel',
            'model' => 'Corsa',
            'speed' => '140',
            'doors' => '5',
            'years' => '2007'
            ]
        ];

    foreach ($cars as $key => $car) {
        foreach ($car as $key => $val) {
            if ($key != 'name'){
                echo " - ";
            }
            echo "$val";
        }
        echo "<br>";
    }
?>