<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <title>Nested Loop</title>
  </head>
  <body>
    <h1 style="color:blue;font-size:20px;">This is program for Nested Loop</h1>
    <br>
    <?php
           
      for ($row = 1; $row < 5; $row++) {
        echo "<ul>";
        echo "<li>".$row."</li>";
        
        echo "</ul>";
        
        echo "<ul>";
        echo "<ul>";
                   
        for ($col = 1; $col < 6; $col++) {
          echo "<li>".$col."</li>";
          
        }
        echo "</ul>";
        echo "</ul>";
        
      }
  ?> 
    
   
  </body>
</html>