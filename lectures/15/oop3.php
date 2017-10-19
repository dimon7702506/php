<?php

class Box
{
    protected const CODE = "box-xyz";

    public function print_box()
    {
        //позднее статическое связывание. Self - всегда не меняется константа, а const - смотря откуда вызвали
        //return self::CODE;
        return static::CODE;
    }
}

class TriangleBox extends Box
{
    protected const CODE = "box-triangle";
}

$triangle_box = new TriangleBox();
$box = new Box();

//var_dump($triangle_box);
echo "<br>";

//$triangle_box::CODE = 'box';

var_dump($triangle_box->print_box());
echo "<br>";
var_dump($box->print_box());