<!-- Using Prepared Statements -->
<html><div>
<?php
// Using PDO and prepared statments guards you from sql injection attacks.
//
// In my matches table, player1Elo is an int, player1 and round are varchars
require_once('db.php');
$name = 'Carlsen, Magnus';
$elo = 2863;
$round = '11';

// The non-prepared statement method.
// Notice how i have to put single quotes around any non numeric fields.
$sql = "SELECT player1,player2 FROM matches WHERE player1 = '$name' AND player1Elo = $elo AND round = '$round'";
$results = execute($sql,true,null);
print_r($results);

echo('<br><br><br>');

// The prepared statement method.
// This guards you from sql injection attacks
// Plus, i dont need to worry about single quoting values
$sql = "SELECT player1,player2 FROM matches WHERE player1 = ? and player1Elo = ? AND round = ?";
// Since there are two ? in my sql statement, I need two elements in my $args array.
// The elements in the $args array should match from left to right 
$args = [];
$args[] = $name;
$args[] = $elo;
$args[] = $round;
$results = execute($sql,true,$args);
print_r($results);



?>
</div></html>