<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Урок №6 - Формы ввода</title>
</head>
<body>
<style>
	textarea {
		resize: none;
	}
</style>
<a href="calc.php">Калькулятор</a><br>
<a href="tour.php">Туры</a><br><hr>
<form action="" method="POST">
	Имя <br><input type="text" name="name" value="<?=$_REQUEST['name']?>"><br>
	Возраст <br><input type="text" name="age" value="<?=$_REQUEST['age']?>"><br>
	<textarea name="description" rows="5" cols="31"><?=$_REQUEST['description']?></textarea><br>
	<input id="remember" type="checkbox" name="remember"><label for="remember">Запомнить меня</label><br>
	<div>
		<br>Вы курите?<br>
		<input id="s1" type="radio" name="smoke" value="yes"><label for="s1">Да</label>
		<input id="s2" type="radio" name="smoke" value="no"><label for="s2">Нет</label>
	</div>
	<br>
	<input type="submit" name="submit" value="Отправить">
</form>
<hr>

<?php

	if($_REQUEST['submit']):?>
		<p>Меня зовут: <?=$_REQUEST['name']?></p>
		<p>Мой возраст: <?=$_REQUEST['age']?></p>
	<?php endif?>

<?php
	var_dump($_GET);
echo "<br>";
    var_dump($_POST);
echo "<br>";
    var_dump($_REQUEST);
?>
<br><br>
<a href="calc.php">Калькулятор</a><br>
<a href="tour.php">Туры</a>
</body>
</html>