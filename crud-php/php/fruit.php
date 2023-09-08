<?php
class Fruit {
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

