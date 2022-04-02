<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro() {
        echo "This fruit is a " . $this->name . " and the color is " . $this->color . ".";
    }
}

// Strawberry is inherited from Fruit

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?".'<br>';
    }
}
$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
$strawberry->intro();
?>