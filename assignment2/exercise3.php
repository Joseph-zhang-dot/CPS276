<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>&lt;My Web Page&gt;</title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 800px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
  <?php
  echo "<table border =\"1\" style='border:1px solid black'>";
      for ($Row =1; $Row < 16; $Row++){
        echo "<tr>\n";
        for ($Cell = 1; $Cell < 6; $Cell++){
          echo "<td> Row $Row Cell $Cell </td> \n";
        }
        echo "</tr>";
      }
      echo "</table>";
?>
    
</body>
</html>