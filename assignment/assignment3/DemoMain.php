

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CalculatorTools</title>
  </head>
  <body>
    <?php
    require_once "Calculator.php";
    $Calculator = new Calculator();
    echo $Calculator->calc("/", 10, 0); //will output Cannot divide by zero
    echo $Calculator->calc("*", 10, 2); //will output The product of the numbers is 20
    //echo $Calculator->calc("/", 10, 2); //will output The division of the numbers is 5
    echo $Calculator->calc("-", 10, 2); //will output The difference of the numbers is 8
    echo $Calculator->calc("+", 10, 2); //will output The sum of the numbers is 12
    echo $Calculator->calc("+", 10, 3); 
    //echo $Calculator->calc("*", 10); //will output You must enter a string and two numbers
   // echo $Calculator->calc(10); //will output You must enter a string and two numbers
    ?> 
  </body>
</html>