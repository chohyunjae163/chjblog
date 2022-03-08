<?php 
    declare(strict_types=1);
    function calculate(string $str){
        $stack = explode(" ",$str);
        $result = 0;
        while(count($stack) > 0){
            $element = array_pop($stack);
            if ( $element == "*" ) {

            } else if ( $element == "/" ) {

            } else if ( $element == "+" ) {
                $operand = array_pop($stack);
                $result = (float)$operand + $result;
            } else if ( $element == "-" ) {
                $operand = array_pop($stack);
                $result = (float)$operand - $result;
            } else if ( $element == ")" ) {
                //while()
            } else if ( is_numeric($element) ) {
                $result = $element;
            }
        }
        return "$str  = $result";
    }
?>
