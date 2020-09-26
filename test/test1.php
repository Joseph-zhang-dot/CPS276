<?php
print "PHP is fun<br>";
$X= "YOU";
var_dump($X);

//class car{
    $car1 = array("vo", "bm", "vw");
    echo " i like". $car1[0];
    //function car(){
    //    $this->model = "VW";
    //}
//}
//$herb = new car();
//echo $herb->model;
echo "<br>";
$t = date("H");
if ($t < "20") {
    echo "Have a good day";
}
echo "<br>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  echo $_SERVER['PHP_SELF'];
  echo "<br>";
  echo $_SERVER['SERVER_ADDR'];

?>