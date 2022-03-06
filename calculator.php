<?php 
    declare(strict_types=1);
    function calculate($expression){
        $stack = array();
        $str_len = strlen($expression);
        for($index = 0; $index < $str_len; $index++){
            $token = $expression[$index];
            if($token == "/" || $token == "*")
                array_pop($stack);
            else
                array_push($stack,$token);
        }
        return $stack;
    }
?>
