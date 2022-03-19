<?php 
    declare(strict_types=1);
    function trim_equation(string $str) {
        $len = strlen($str);
        $arr = array();
        $queue = array();
        for ( $index = 0; $index < $len; $index++ ) {
            $element = $str[$index];
            if ( $element == "+" || $element == "-" || $element == "*" || $element == "/") {
                $num = "";
                while(count($queue) > 0)
                    $num = $num . array_shift($queue);

                array_push($arr,$num,$element);

            } else
                if ( is_numeric ( $element ) )
                    $queue[] = $element;
        }
        $number_len = count($queue);
        if($number_len > 0) {
            $num = "";

            while(count($queue) > 0)
                $num = $num . array_shift($queue);    

            $arr[] = $num;
        }
        return $arr;
    }

    function calculate( string $str ) {
        $arr = trim_equation($str);
        $stack = array();
        for ( $index = 0; $index < count($arr); $index++ ) {
            $element = $arr[$index];
            if(is_numeric($element) || $element == "+" || $element == "-") {
                $stack[] = $element;
            } else if ( $element == "*" ) {
                $operand = array_pop($stack);
                $index += 1;
                $operand_2 = $arr[$index];
                $result = (float)$operand * (float)$operand_2;
                $stack[] = $result;
            } else if ( $element == "/" ) {
                $operand = array_pop($stack);
                $index += 1;
                $operand_2 = $arr[$index];
                $result = (float)$operand / (float)$operand_2;
                $stack[] = $result;
            } 
        }
        print_r($stack);
        $result = 0;
        $queue = $stack;
        while ( count($queue) > 0 ) {
            $element = array_shift($queue);
            if ( $element == "+" ) {
                $operand = array_shift($queue);
                $result = (float)$result + $operand;
            } else if ( $element == "-" ) {
                $operand = array_shift($queue);
                $result = (float)$result - $operand;
            } else if ( is_numeric($element) ) {
                $result = $element;
            }
        }
        return "$str  = $result";
    }
?>
