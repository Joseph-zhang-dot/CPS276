
<?php
// $str = "<h1>Hello World!</h1>";
//  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
// echo $newstr;
// $int = 100.1;

// if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
//   echo("Integer is valid");
// } else {
//   echo("Integer is not valid");
// }
// $ip = "127.0.0.1";

// if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
//   echo("$ip is a valid IP address");
// } else {
//   echo("$ip is not a valid IP address");
// }

// $email = "john.doe@example.com";

// // Remove all illegal characters from email
// $email = filter_var($email, FILTER_SANITIZE_EMAIL);

// // Validate e-mail
// if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
//   echo("$email is a valid email address");
// } else {
//   echo("$email is not a valid email address");
// }

// $url = "https://www.w3schools...com";

// // Remove all illegal characters from a url
// $url = filter_var($url, FILTER_SANITIZE_URL);

// // Validate url
// if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
//   echo("$url is a valid URL");
// } else {
//   echo("$url is not a valid URL");
// }

// $int = -122;
// $min = 1;
// $max = 200;

// if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
//   echo("Variable value is not within the legal range");
// } else {
//   echo("Variable value is within the legal range");
// }

// function my_callback($item) {
//     return strlen($item);
//   }
  
//   $strings = ["apple", "orange", "banana", "coconut"];
//   $lengths = array_map( function($item) { return strlen($item); } , $strings);
//   print_r($strings);


// function exclaim($str) {
//     return $str . "! ";
//   }
  
//   function ask($str) {
//     return $str . "? ";
//   }
  
//   function printFormatted($str, $format) {
//     // Calling the $format callback function
//     echo $format($str);
//   }
  
//   // Pass "exclaim" and "ask" as callback functions to printFormatted()
//   printFormatted("Hello world", "exclaim");
//   printFormatted("Hello world", "ask");

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

$obj = json_decode($jsonobj,true);

foreach($obj as $key => $value) {
  echo  $key . " => " . $value . "<br>";
} 
?>