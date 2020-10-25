<?php
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }  
      return $dividend / $divisor;
 
}

try {
    echo divide($dividend, $divisor);
  } catch(Exception $e) {
    // $code = $ex->getCode();
    // $message = $ex->getMessage();
    // $file = $ex->getFile();
    // $line = $ex->getLine();
    echo "Unable to divide. ";
    // $message";
  }
?>