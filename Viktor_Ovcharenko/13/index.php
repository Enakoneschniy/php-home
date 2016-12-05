<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework_13</title>
</head>
<body>
	<?php
	$folder = 'lib';
	$libs = scandir($folder);
	foreach ($libs as $lib) {
		$file_name = $folder.'/'.$lib;
		if(is_file($file_name) && strrpos($file_name, '.php') == strlen($file_name) - 4){
        	require_once($file_name);
    	}
	}
	
	$folder = 'objects';
	$classes = scandir($folder);
	foreach ($classes as $class) {
		$file_name = $folder.'/'.$class;
		if(is_file($file_name) && strrpos($file_name, '.php') == strlen($file_name) - 4){
        	require_once($file_name);
    	}
	}

	?>
	<h2>Family</h2>
	<?php
		$son = new Family('son', 'Roman', 'men', 0.9);
		show_var($son);
		echo $son->getName().'<br>';
		$son->setAge('9 months');
		echo $son->getAge(); 

		$father = new Family('father', 'Sergey', 'men', '54 yers');
		show_var($father);
	?>
	<h2>Country</h2>
	<?php
		$ukraine = new Country('Ukraine', '42 milion', 'Europe', 'Kiev');
		$france = new Country('France', '66 milion', 'Europe', 'Paris');
		show_var($ukraine);
		$ukraine::setPlanet('Mars');
		echo $ukraine::getPlanet().'<br>';
		echo $france::getPlanet().'<br>';
		$france::setPlanet('Earth');
		echo $ukraine::getPlanet().'<br>';
		echo $france::getPlanet();
	?>
	<h2>Phone</h2>
	<?php
		$samsungA5 = new Phone('Samsung A5', '400 $', 5.2);
		$iphone5s = new Phone('Iphon 5s', '300 $', 4.5);
		show_var($samsungA5);
		$iphone5s->setScreen_diagonal(4);
		show_var($iphone5s);
	?>
	<h2>Task on recursion</h2>
	<?php
		echo sumNumbers(34533);
	?>
</body>
</html>