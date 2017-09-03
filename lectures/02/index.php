<?php
$loc = false;

echo $loc, "<br>";

echo !$loc, "<br>";

echo $loc, "<br>";

$number = 7;

echo $number % 2;
echo "<br>";
$a = 4; $b = 6;

echo $a, " ", $b, "<br>";

$c = $a;
$a = $b;
$b = $c;

echo $a, " ", $b, "<br>";

$a = $a ^ $b;
echo $a, "<br>";
$b = $b ^ $a;
echo $b, "<br>";
$a = $a ^ $b;

echo $a, " ", $b, "<br>";
$a = $b;
if($a > $b){
	echo "a > b <br>";
}elseif($a < $b){
	echo "a < b <br>";
}else{
	echo "a = b <br>";
}

$a = 2; $b = 6; $c = 5;

if($a < $c){
	$x = ($a + $b) / $c * $a;
}elseif($a > $c){
	$x = $c * ($b * 3) + $c/$c * sqrt($c);
}else{
	$x = 100;
}

$b = '2';

if($a === $b){
	echo "a == b <br>";
}

echo $x, "<br>";

$a = 2; $b = 6; $c = 5;
var_dump($a);

if($a < $b && $a < $c && ($a != 2 || $c > $b)){
	echo "OK<br>";
}else{
	echo "NO<br>";
}

if($a < $b){
	$x = $a;
}else{
	$x = $b;
}

$x = ($a < $b) ? $a : $b;// тернарный оператор. аналог if else.

/*$a = null;
$x = $a || $b;
echo $x, "<br>";*/

echo "<hr>";

$i = 1;

while ($i <= 4) {
	echo $i++, "<br>";
	$j = 20;
	while ( $j <= 24) {
		echo $j++, "<br>";
	}
}

//$i = 1;
do{
	echo $i++, "<br>";
}while ($i <= 4);

$cnt = 100;
while(true){
	$num = rand(1, 10);
	if($num == 5 || $cnt == 0){
		break;
	}
	$cnt--;
}
echo  100 - $cnt, "<br>";

echo  "<br>";
for($i = 0; $i < 10; $i++){
	echo $i , "<br>";
}

echo "<hr>";

$day = 'Fidaasday';

switch ($day) {
	case 'Monday':
		echo 1;
		break;
	case 'Fiday':
		echo 5;
		break;

	default:
		echo 'error';
		break;
}

echo "<br><br><br><br><br><br><br><br><br><br>";