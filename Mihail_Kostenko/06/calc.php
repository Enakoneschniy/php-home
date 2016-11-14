<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Калькулятор простой</title>
</head>
<body>
<form>
<div>
<input type="number" name="a" value="0" required>
</div>
<div>
<input type="number" name="b" value="0" required>
</div>
<div>
<select name="operation" style="width:100px">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
</select>
</div>
<div>
<input type="submit" name="calc" value="Посчитать">
</div>
</form>
<hr>

<?php
	if($_REQUEST['calc']){
		$a = $_REQUEST['a'];
		$b = $_REQUEST['b'];

		switch ($_REQUEST['operation']) {
			case '+':
				echo "$a + $b = ", $a + $b;
				break;
			case '-':
				echo "$a - $b = ", $a - $b;
				break;
			case '*':
				echo "$a * $b = ", $a * $b;
				break;
			case '/':
				if($b == 0){
					echo "Ошибка! Деление на ноль!";
				}else{
					echo "$a / $b = ", $a / $b;
				}
				break;
			default:
				echo "Operation not found!";
				break;
		}
	}

echo "<hr>";
var_dump($_REQUEST);
?>

<br><br>
<a href="index.php">Вернуться на главную</a><br>
<a href="tour.php">Расчёт тура</a><br>
</body>
</html>