<?php
abstract class car{
    public $name;
    public function _construct($name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}

class Audi extends car{
    public function intro() : string{
        return"Choose German quality! I'm an $this->name!";
    }
}
$audi = new audi("Audi");
echo $audi->intro;
echo "<br>";
?>