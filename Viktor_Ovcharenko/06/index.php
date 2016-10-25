<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css
	">
	<title>HW_02</title>
</head>
<body>
	<h3>Выберите нужную матрицу:</h3>
	<form action="" method="" id="form">
		<label for="len" >Задай длину матрицы: </label><input type="number" name="len" id="len" ><br><br>
		<input type="checkbox" name="matrix_1" id="matrix_1" ><label for="matrix_1" >Первая матрица</label>
		<input type="checkbox" name="matrix_2" id="matrix_1"><label for="matrix_1">Вторая матрица</label>
		<input type="checkbox" name="matrix_3" id="matrix_1"><label for="matrix_1">Третья матрица</label><br>
		<input type="submit" name="submit" value="Выбрать" id="submit">
	</form>

	<?
		$matrix = [];
		$element = 0;
		$len = $_REQUEST["len"];
		for ($i = 0; $i < $len; $i++) {
			$matrix[$i] = [];
			for ($j = 0; $j < $len; $j++) {
				$element = ($i + 1) * ($j + 1);
				if ($element < 10) {
					$matrix[$i][$j] = ' '.$element;
				}elseif ($element == 100) {
					$matrix[$i][$j] = $element;
				} else {
					$matrix[$i][$j] = ' '.$element;
				}
			}
		}
	?>
	<? if($_REQUEST["matrix_1"]):?>
		<div id="answer">
			<? foreach ($matrix as  $arr) : ?>
				<div id = "phon">
					<? foreach ($arr as  $element) : ?>
						<span id = "phon"><?=$element?></span>
					<?endforeach;?>
				</div>
			<? endforeach;?>
		</div>
	<? endif;?>
	<?
		$matrix = [];
		$len = $_REQUEST["len"];
		$length = $len;
		for ($i = 0; $i < $len; $i++) {
			$matrix[$i] = [];
			$length--;
			for ($j = 0; $j < $len; $j++) {
				if ($i == $j) {
					$matrix[$i][$j] = 1;
				} elseif ($j == $length) {
					$matrix[$i][$j] = 2;
				} elseif ($j > $i && $j > $length) {
					$matrix[$i][$j] = 3;
				} elseif ($j < $i && $j > $length) {
					$matrix[$i][$j] = 5;
				} elseif ($j < $i && $j < $length) {
					$matrix[$i][$j] = 6;
				} else {
					$matrix[$i][$j] = 3;
				}
			}
		}
	?>
	<? if($_REQUEST["matrix_2"]):?>
		<div id="answer">
			<? foreach ($matrix as  $arr) : ?>
				<div id = "phon">
					<? foreach ($arr as  $element) : ?>
						<span id = "phon"><?=$element?></span>
					<?endforeach;?>
				</div>
			<? endforeach;?>
		</div>
	<? endif;?>
	<?
		$matrix = [];
		for ($i = 0; $i < $len; $i++) {
			$matrix[$i] = [];
			for ($j = 0; $j < $len; $j++) {
				if ($j > ($i)) {
					$matrix[$i][$j] = ' ';
				} elseif ($j == 0 || $j == $i) {
					$matrix[$i][$j] = 1;
				} else {
					$matrix[$i][$j] = $matrix[$i - 1][$j] + $matrix[$i - 1][$j - 1];
				}
			}
		}
	?>
	<? if($_REQUEST["matrix_3"]):?>
		<div id="answer">
			<? foreach ($matrix as  $arr) : ?>
				<div id = "phon">
					<? foreach ($arr as  $element) : ?>
						<span id = "phon"><?=$element?></span>
					<?endforeach;?>
				</div>
			<? endforeach;?>
		</div>
	<? endif;?>
	<hr>
	<form action="hello.php" method="" id="form2">
		<label for="name" >Введите ваше имя: </label><input type="text" name="name" id="name"><br><br>
		<label for="age" >Введите ваш возраст: </label><input type="number" name="age" id="age"><br><br>
		<textarea cols="21" rows="5" name="mes" value="$_REQUEST["mes"]"></textarea><br><br>
		<input type="submit" name="submit" value="Выбрать" id="submit">
	</form>
</body>
</html>

