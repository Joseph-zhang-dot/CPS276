<!-- Last Insert Id -->

<html><div>
<?php
//  SELECT LAST_INSERT_ID() will return the last autoincrement id created

require_once('db.php');
$args[] = 'test.jpg';
execute("INSERT INTO image (image_name) VALUES (?)",false,$args);

$results = execute("SELECT LAST_INSERT_ID() AS id",true);
echo($results[0]['id']);
?>

</div></html>