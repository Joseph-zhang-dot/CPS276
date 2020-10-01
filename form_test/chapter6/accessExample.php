<?php
class Fruit{
    public $name;
    private $color;
    protected $weight;
    function set_color($n){
        $this->color = $n;
        return $this->color;
        
    }
    function set_weight($n){
        $this->weight = $n;
        return $this->weight;
    }
}

$mango = new Fruit();
$mango->name = "Mango";
$mango->set_color('Red');
$mango->set_weight('100');
echo $mango->name;
echo $mango->color;
echo $mango->weight;

?>