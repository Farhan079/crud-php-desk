<?php
class Mobile{
    public $model;
    public $price;
    public $company;
    
    function __construct($mod, $pc, $comp){
        $this->model = $mod;
        $this->price = $pc;
        $this->company = $comp;
    }

        function show(){
            echo "this is a {$this->model} , {$this->price} and {$this->company} of your car <br>";
        }
class type extends Mobile{
    function message(){
        echo "this is a chid class of mobile";
    }

}

class grandchild extends type{
    function intro(){
        echo "this is sub child class";
    }
}
    
}
$mobile = new mobile("g5", 768, "honda");
$model->show();


?>

<?php
/*class Fruit {
  public $name;
  private $color;
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "Am I a fruit or a berry? ";
    
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}
$strawberry = new Strawberry("Strawberry", "red");

$strawberry->intro();
$strawberry->message();
?>