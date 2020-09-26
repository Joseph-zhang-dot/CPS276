<?php
$val='';
if(!empty($_REQUEST['fname'])){
	$val = $_REQUEST['fname'];
}
?>



<html>
	<br>
	<form method="post">
		Enter your name
		<input name="name" value="<?echo($val);?>"type="text">
		<br>
		<input name="name" type="submit" value="Press Here">
		<br>
		<a href="start.php">Go to page</a>

	</form>


</html>