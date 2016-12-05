<?php
	function show_var($variable){
			echo '<pre>';
			var_dump($variable);
			echo '</pre>';
		}
	function sumNumbers($number){
		$sum = 0;
		if($number < 10){
			return $sum = floor($number);
		}else{
			return $sum += floor($number % 10) + sumNumbers($number / 10);
		}
	}	
?>