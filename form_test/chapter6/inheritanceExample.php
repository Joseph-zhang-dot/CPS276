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
    public function message(){
        echo " Am I a fruit or a berry?";
    }
}
    $strawberry = new Strawberry("Straw","red");
    $strawberry->message();
    echo "<br>";
    $strawberry->intro();

?>