<?php
class fruit{
    public $name;
    public $price;
    public $color;
}

$f1 = new Fruit();

$f1->name = "Apple";
$f1->price = "30$";
$f1->color = "red";

echo $f1->name;

?>