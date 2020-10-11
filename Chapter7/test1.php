<?php
include 'example1.php';
$output = getNames();
// $names = array("Scott","Karen","Mike","Judy","John","James","Steve");
/*
*/
// $output = "<ul>";
// foreach ($names as $name) {
// $output .= "<li>{$name}</li>"; 
// }
// $output .= "</ul>";
// echo $names[1];
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Name List</title>
</head>
<body>
<main class="container">
<h1>List of names</h1>
<?php
 echo $output; 
<form action="text" name="emailAddress"value="">
    $email = $_GET["emailAddress"];
</form>
?>
</main>
</body>