<?php 
    declare(strict_types=1);
    function parse(string $str) {
        $len = strlen($str);
        for ( $index = 0; $index < $len; $index++ ) {
            echo $str[$index];
            echo "<br>";
            $element = $str[$index];
            if(is_numeric($element)) {
                
            }
        }
        return $str;
    }

    function calculate( string $str ) {
        $arr = explode(" ",$str);
        $result = 0;
        $stack = array();
        for ( $index = 0; $index < count($arr); $index++ ) {
            $element = $arr[$index];
            if(is_numeric($element) || $element == "+" || $element == "-") {
                array_push($stack,$arr[$index]);
            } else if ( $element == "*" ) {
                $operand = array_pop($stack);
                $index += 1;
                $operand_2 = $arr[$index];
                $mul = (float)$operand * (float)$operand_2;
                array_push($stack,$mul);
            } else if ( $element == "/" ) {
                $operand = array_pop($stack);
                $index += 1;
                $operand_2 = $arr[$index];
                $mul = (float)$operand / (float)$operand_2;
                array_push($stack,$mul);
            } 
        }
        
        while ( count($stack) > 0 ) {
            $element = array_pop($stack);
            if ( $element == "+" ) {
                $operand = array_pop($stack);
                $result = (float)$operand + $result;
            } else if ( $element == "-" ) {
                $operand = array_pop($stack);
                $result = (float)$operand - $result;
            } else if ( is_numeric($element) ) {
                $result = $element;
            }
        }
        return "$str  = $result";
    }
?>
