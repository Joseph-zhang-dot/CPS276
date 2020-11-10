<?php
require_once('db.php');

$results = execute('select * from teacher');
print_r($results);

?>