<?php
function getNames(){
$names = array("Scott","Karen","Mike","Judy","John","James","Steve");
/*
*/
$output = "<ul>";
foreach ($names as $name) {
$output .= "<li>{$name}</li>"; 
}
$output .= "</ul>";
return $output;
// echo "I like" .$names[1].".";

}

?>
