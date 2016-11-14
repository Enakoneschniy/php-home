<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Расчёт тура</title>
</head>
<body>
<?php
	$countries = [
		[
			'name' => 'Египет',
			'price' => 100
		],
		[
			'name' => 'Турция',
			'price' => 90
		],
		[
			'name' => 'Испания',
			'price' => 200
		],
		[
			'name' => 'Италия',
			'price' => 150
		]
	];
?>
<form method="post">
<div>
	<label for="days">Количество дней:</label>
	<input id="days" name="days" type="number" required value="10">
</div>
<div>
	<label for="country">Страна</label>
	<select id="country" name="country">
		<?php foreach($countries as $key => $country):?>
			<option value="<?=$key?>"><?=$country['name']?></option>
		<?php endforeach?>
	</select>
</div>
<div>
	<input type="submit" name="calc" value="Посчитать">
</div>
</form>
<hr>
<?php
	if($_REQUEST['calc']) {
		$index = $_REQUEST['country'];
		echo "Страна: ",$countries[$index]['name'], "<br>";
		echo "Цена за ",$_REQUEST['days'], " дней: ", $countries[$index]['price'] * $_REQUEST['days'], "грн.";

		echo "<hr>";
		var_dump($_REQUEST);
		echo "<br>";
		var_dump($countries[$index]);
		};
	
?>
<br><br>
<a href="index.php">Вернуться на главную</a><br>
<a href="calc.php">Калькулятор</a><br>
</body>
</html>