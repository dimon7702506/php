<?php
echo "HELLO WORLD";
echo "<br>";
print "sdsds";

$name = "Vasya";
echo "<br>";
echo "hello my name is $name";
echo "<br>";
echo "hello my name is ", $name;
echo "<br>";
echo "hello my name is " . $name;
echo "<br>";
echo 'hello my name is $name';
echo "<br>";
$a = 23;
$b = 2;
echo $a + $b;
echo "<br>";
echo gettype($a);
$a = 2.4;
$b = 4.6;
echo "<br>";
echo $a + $b;
echo "<br>";
echo gettype($a);
echo "<br>";
$foo = true; // 1...n or string
$bar = false; //
echo $foo;
echo "<br>";
echo $bar;
echo $ba;
$ba = $ba + 3;
echo $ba;
echo "<br>";
$ba = true;
$ba = 1 + 3;
echo $ba;
$myName = "Eugene";
$null = null;
echo "<br>";
echo $null;
//echo 4 / 0;

/*  sdf
sdf
*/
echo "<br>";
$a = 10;
$b = '2';
echo $a + (int)$b;
echo "<br>";
$a = 10;
$b = '2a';
echo $a + $b;
echo "<br>";
$a = 10.9;
$b = '2.3';
echo (float)$a + (float)$b;
settype($b, "float");
echo "<br>";
echo (float)$a . " " . (float)$b;
echo "<br> $a $b";
$result = $a / $b;
echo "<br> $a / $b = $result";

$result = $a / $b;
$result = round($result, 2);
echo "<br> $a / $b = $result";

$result = $a / $b;
$result = floor($result);
echo "<br> $a / $b = $result";

$result = $a / $b;
$result = ceil($result);
echo "<br> $a / $b = $result";

echo "<br>", rand(5, 15);

define('PI', 3.14);
echo "<br>", PI;

const FOO = 123;
echo "<br>", FOO;

$baz = 10;
$baz = $baz + 1; // 11
$baz += 1;

$baz++;
++$baz;
$baz--;
--$baz;

$a = 4;
$b = 5;
echo '<br>',
    --$a + $b ++ + ++$a;
echo '<br>', $b;

echo "<br><br><br><br><br><br><br><br><br><br>";