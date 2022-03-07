<?php 
    declare(strict_types=1);
    function calculate($expression){
        $stack = array();
        $result = 0;
        $str_len = strlen($expression);
        for($index = 0; $index < $str_len; $index++){
            $token = $expression[$index];
            if($token == "/"){
               
            }else if($token == "*") {
            }
               
            else
                array_push($stack,$token);
        }
        while(count($stack) > 0){
            $element = array_pop($stack);
            if ( $element == "+" ) {
                $operand = array_pop($stack);
                $result += $operand;
            } else if ( $element == "-" ) {
                $operand = array_pop($stack);
                $result -= $operand;
            }
        }
        return $stack;
    }
?>
