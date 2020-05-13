<?php

class Calculator{
    private $a,$b;

    public function __construct($a,$b){
        $this->_a = $a;
        $this->_b = $b;
    }

    public function add(){
        return $this->_a + $this->_b;
    }

    public function sub(){
        return $this->_a - $this->_b;
    }

    public function multiply(){
        return $this->_a * $this->_b;
    }

    public function divide(){
        return $this->_a / $this->_b;
    }

    public function modulus(){
        return $this->_a % $this->_b;
    }

}

$calc1 = new Calculator(3,4);
echo "<p>3 + 4  = ".$calc1->add()."</p>";

$calc2 = new Calculator(4,3);
echo "<p> 4 - 3 = ".$calc2->sub()."</p>";

$calc3 = new Calculator(200,200);
echo "<p>200 * 200 = ".$calc3->multiply()."</p>";

?>