<?php
require_once('db.php');

$args = array();
array_push($args,2);
$result = execute('select * from teacher');
print_r($result);



?>