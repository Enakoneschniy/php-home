<?

echo "<h1>Hello World</h1>";

$name = 'Петя';
$user_name = "Меня зовут: $name";
?>

<span>Меня зовут: <strong><? echo "$name" ?></strong></span><br>
<span>Меня зовут: <strong><?=$user_name?></strong></span>


<?
echo "<h1>Hello World</h1>";
$name = 'Петя';
$user_name = "Меня зовут: $name";
?>

<span>Меня зовут: <strong><? echo "$name" ?></strong></span><br>
<span>Меня зовут: <strong><?=$user_name?></strong></span>

//Домашнее задание...

<?
echo "<h2>Домашнее задание в теге h2</h2>";
$_name = 'Миша';
$_lastname = 'Костенко';
?>
<span>Моё полное имя: <strong><? echo "$_lastname $_name"?></strong></span><br>
<span>Но, обычно меня зовут, просто <?=$_name?></span><br>

<? echo "$_name"; ?>


