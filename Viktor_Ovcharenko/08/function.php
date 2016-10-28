<?php
    //функции к первому заданию
    function build_cube($array) {
        if (is_array($array)) {
            $length = 0;
            $length = count($array);
            for ($i = 0; $i < $length; $i++) {
                if (isset($array[$i])) {
                    $array[$i] = pow($array[$i], 3);
                }
            }
            return $array;
        }
    }

    function rand_array($len, $min, $max) {
    	$length = $len;
    	$rand_array = [];
    	for ($i = 0; $i < $length; $i++) {
    		$rand_array[$i] = mt_rand($min, $max);
    	}
        return $rand_array;
    }

    function show_array($array) {
        if (is_array($array)) {
            echo "<pre>";
            var_dump($array);
            echo "</pre>";
        }
    }

    //функции к второму и третьему заданиям
    function sum_arreys(...$arrays) {
        $sum_arreys = [];
        foreach ($arrays as $array) {
            for ($i = 0; $i < count($array); $i++) {
                $sum_arreys[$i] += $array[$i];
            }    
        }
        return $sum_arreys;
    }

    //функции к четвертому заданию
    function max_element(...$arrays) {
        $max_element = [];
        $max = 0;
        foreach ($arrays as $key => $array) {
            $max = $array[0];
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] > $max) {
                    $max = $array[$i];
                }
            }
            $max_element[$key] = $max;    
        }
        return $max_element;
    }
?>
