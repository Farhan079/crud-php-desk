<?php
class fruits{
    public $name, $color, $price;

    function __construct($a, $b, $c){
        $this->name = $a;
        $this->color = $b;
        $this->price = $c;
    }
    function shop(){
        return "humary pas kxh nhi ha";
    }
}
$f1 = new fruits("Apple", "green", 100);
// $f2 = new fruits("orange", "red", 200);
// $f3 = new fruits("cherry", "black", 500);

echo $f1->name, "<br>";
echo $f1->color, "<br>";
echo $f1->price, "<br>";
echo $f1->shop(), "<br>";

?>