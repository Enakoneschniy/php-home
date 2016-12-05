<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework_08</title>
</head>
<body>
	<?php
		require "function.php";
	?>
	<h3>Задание 1</h3>
	<?php
		$array = rand_array(5, 1, 10);
		show_array($array);
		show_array(build_cube($array));
	?>
	<h3>Задание 2 и 3</h3>
	<?php
		$array_first = rand_array(6, 1, 10);
		$array_second= rand_array(5, 1, 10);
		$array_third = rand_array(8, 1, 10);
		show_array($array_first);
		show_array($array_second);
		show_array($array_third);
		show_array(sum_arreys($array_first, $array_second, $array_third));
	?>
	<h3>Задание 4</h3>
	<?php
		$array_first = rand_array(8, 1, 15);
		$array_second= rand_array(5, 5, 10);
		$array_third = rand_array(12, 1, 20);
		show_array($array_first);
		show_array($array_second);
		show_array($array_third);
		show_array(max_element($array_first, $array_second, $array_third));
	?>
</body>
</html>