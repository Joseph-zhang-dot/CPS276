<!DOCTYPE html>
<html>
<body>
<?php

class Fruit{
    private $name;
    private $color;

    //function _construct($name, $color){
    //    $this->name = $name;
    //    $this->color = $color;
    //}
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }
    function get_color(){
        return $this->color;
    }
    //function _destruct(){
    //    echo "The fruit is {$this->name}.";
    //}
 
}
/*
$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
*/
$apple = new Fruit();
$banaa = new Fruit();
$apple->set_name('Apple');
$banaa->set_name('Banana');
$apple->set_color('red');
//$banaa->color = "yellow";

echo $apple->get_name();
echo "<br>";
echo $banaa->get_name();
echo "<br>";
echo "Color:" . $apple->get_color();
echo "<br>";
//echo "Color of balana:" . $banaa->color;
echo "<br>";
//var_dump($apple instanceof Fruit);

?>   
</body>
</html>
