<?php
class parent{
    public $name;

    function __construct(){
        $this->name= $n;
    }
    function show(){
        echo "this is parent class"
    }
    class child extends prnt{
        function show()
    }
}
$obj1 = new print("Farhan");
echo $obj1->name, "<br>";
echo $obj1->show(), "<br>";
?>