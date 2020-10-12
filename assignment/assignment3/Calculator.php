<?php 
$result = "";
class calculator
{
    public $a;
    public $b;
    public $c;
    public $result;

    
        function _construct($c, $a, $b){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c; 
        }
        function calc($c, $a, $b)
        { 
            $this->a = $a;
            $this->b = $b;     
            return $this->checkopration($c);
        }
    function checkopration($oprator)
        {
        switch($oprator)
        {
            case '+':
            $result = $this->a + $this->b;
            echo "The sum of the numbers {$this->a} and {$this->b} is {$result}<br>";
            break;

            case '-':
            $result= $this->a - $this->b;
            echo "The difference of the numbers {$this->a} and {$this->b} is {$result}<br>";
            break;

            case '*':
            $result= $this->a * $this->b;
            echo "The product of the numbers {$this->a} and {$this->b} is {$result}<br>";
            break;

            case '/':
                function divide($a,$b){
                    
                    if ($b == 0){
                        throw new Exception("Division by zero<br>");
                    } else {
                        $result=$a /$b;
                        echo "The division of the numbers {$a} and {$b} is {$result}<br>";
                        }
                    }
                try{

                        divide($this->a,$this->b);
                    }catch (Exception $e){
                        echo "Unable to divide by Zero.<br>";
                    }
                break;

            default:
            return "Sorry No command found";
        }   
    }
    
}


?>

