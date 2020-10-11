<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// to change a session variable, just overwrite it

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
print_r($_SESSION);
echo"<br>";
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

echo "Session variables are set.<br>";
session_unset();
session_destroy();



?>

</body>
</html>