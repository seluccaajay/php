<?php

class StringRev{
    private $str;

    public function __construct($str){
        $this->_str = $str;
    }

    public function Reverse(){
        return strlen($this->_str);
    }
}

$str1 = new StringRev("Ajay_krishnan");
echo "The length of the string is".$str1->Reverse();
?>