<?php
class friend{
    public $name;
    public $profession;
    public $age;
}

$f1 = new friend();

$f1->name = "Abdul";
$f1->profession = "Front-end-developer";
$f1->age = "15";

echo $f1->name;
echo $f1->profession;
echo $f1->age;

?>