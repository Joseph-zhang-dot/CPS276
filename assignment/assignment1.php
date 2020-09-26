<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
$First_name = $Last_name = $Address = $City = $State = $Zip = $Gender="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $First_name = test_input($_POST["First_name"]);
    $Last_name = test_input($_POST["Last_name"]);
    $Address = test_input($_POST["Address"]);
    $City = test_input($_POST["City"]);
    $State = test_input($_POST["State"]);
    $Zip = test_input($_POST["Zip"]);
    $Gender = test_input($_POST["Gender"]);
}
function test_input($data){
    $data = trim ($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  First_name
  <br>
  <input type="text" name="First_name">
  <br><br>
  Last_name: <input type="text" name="Last_name">
  <br><br>
  Address: <input type="text" name="Address">
  <br><br>
  City: <input type="text" name="City">
  <br><br>
  State: <input type="text" name="State" >
  <br><br>
  Zip: <input type="text" name="Zip">
  <br><br>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
    <br><br>
  <input type="register" name="register" value="Register">  
</form>
 
<?php
/*
echo $First_name;
echo "<br>";
echo $Last_name;
echo "<br>";
echo $address;
echo "<br>"
//echo $City;
//echo "<br>";
//echo $State;
//echo "<br>";
//echo $gender;
//echo "<br>";
//echo $Zip;
*/
?>


   
</body>
</html>