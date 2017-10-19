<?php

class Test
{
    public function __construct($color = 'green')
    {
        echo "<br>";
        var_dump($color);
    }

    public static function getNew()
    {
        return new static();
    }
}

class  Apple extends Test
{
    //protected $weight = 10;
    //public $weight = 10;
    private $weight = 10;
    private $color;

    public function __construct($color = 'red')
    {
        parent::__construct($color = 'blue'); //если необходимо вызвать конструктор родителя
        $this->color = $color;
    }

    public function __clone()
    {
        $this->weight = 10;
    }

    public function getWeight()
    {
        return $this->weight;
    }

     public function setWeight(int $weight)
    {
        $this->weight = $weight;
        return $this;
    }
}
$apple = Apple::getNew();
$weight = $apple->setWeight(25)->getWeight();


$test = Test::getNew();
$test1 = new Test();
var_dump(
    $test,
    $test1,
    $test == $test1,
    $test === $test1 //для сравнения объектов необходимо использовать строгое сравнение
);

echo "<br>";

var_dump(
    $apple,
    $test1,
    $apple == $test1,
    $apple === $test1
);
echo "<br>";
$apple2 = new apple;
var_dump($apple2);
echo "<br>";

//проверка на принадлежность класса
var_dump(
    $apple2 instanceof Apple,
    $apple2 instanceof Test
    );
echo "<br>";

//клонирование
$apple2 = clone $apple;
var_dump($apple2);

echo "<br>";
$apple = new Apple('green');
var_dump($apple);