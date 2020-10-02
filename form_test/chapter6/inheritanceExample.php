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
        and the color is {$this->color}.";
        
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
        echo " The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight}.";
    }
}
    $strawberry = new Strawberry("Straw","red", 50);
    $strawberry->message();
    echo "<br>";
    $strawberry->intro();

?>