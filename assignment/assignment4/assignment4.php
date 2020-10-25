<?php
$nameList=empty($_REQUEST['list']) ? '': $_REQUEST['list'];
$name=empty($_REQUEST['name']) ? '' : $_REQUEST['name'];
if(!empty($_REQUEST['clearname'])){
  $nameList='';
}elseif(!empty($_REQUEST['addname'])){
  if(!empty($name)){
    $parts = explode(' ', $name);
    $newName = $parts[1] . ' ' . $parts[0];
    $list = explode("\n", $nameList);
    $list[] = $newName;
    array_push($list, $newName);
    sort($list);
    $nameList = implode("\n",$list);
  }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
  <form method="post">
    <b>Add Names </b> <br>
    <input type="submit" value="Add Name" name="addname">
    <input type="submit" value ="Clear Names" name="clearname">
    <br><br>
    Enter Name <br>
    <input type="text" name="name" value="<?=$name?>" size=50>
    <br><br>
    List of Name <br>
    <textarea readonly name="list" id="" cols="50" rows="10"><?=$nameList?></textarea>
  </form>

  
</body>
</html>