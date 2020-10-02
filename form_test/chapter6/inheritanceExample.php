<?php
class Fruit{
    public $name;
    public $color;
    function _construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function intro(){
        echo "the fruit is {$this->name}
        and the color is {$this->color}";
        echo $this->name;
    }
}
class Strawberry extends Fruit{
    public $weight;
    public function _construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight =$weight;
    }
    public function message(){
        echo " Am I a fruit or a berry?{$this->name}, {$this->color}, {$this->weight}";
    }
}
    $strawberry = new Strawberry("Straw","red", 50);
    $strawberry->message();
    echo "<br>";
    $strawberry->intro();

?>