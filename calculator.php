<?php 
    declare(strict_types=1);
    function calculate(string $str){
        $arr = explode(" ",$str);
        $result = 0;
        $stack = array();
        for ( $index = 0; $index < count($arr); $index++ ) {
            $element = $arr[$index];
            if(is_numeric($element) || $element == "+" || $element == "-") {
                array_push($stack,$arr[$index]);
            }else if ( $element == "*" ) {
                $operand = array_pop($stack);
                $index += 1;
                $operand_2 = $arr[$index];
                $result = (float)$operand * $operand_2;
            } else if ( $element == "/" ) {
            } 
        }
        /*
        while ( count($arr) > 0 ) {
            $element = array_pop($arr);
            if ( $element == "+" ) {
                $operand = array_pop($arr);
                $result = (float)$operand + $result;
            } else if ( $element == "-" ) {
                $operand = array_pop($arr);
                $result = (float)$operand - $result;
            } else if ( is_numeric($element) ) {
                $result = $element;
            }
        }
        */

        return "$str  = $result";
    }
?>
