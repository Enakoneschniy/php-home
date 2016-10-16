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

//*Урок №03 *//
<?
$a = 2;
$b = 4;
echo gettype($a), "<br>";
echo gettype($b), "<br>";
echo gettype($c), "<br>";
echo gettype($d), "<br>";
echo gettype($f), "<br>";
echo gettype($g), "<br>";
echo "<hr>";
if ($a < $b){
		echo "$a > $b"; 
}
echo "<hr>";
$var = 45;
$wtf = 'var';
echo $$wtf; //
echo "<hr>";
$z = 1;
$a = isset($z) ? $z : 0;
echo "<hr>";
if (isset($z)){
	$a = $z;
}
else {
	$a = 0;
}
echo $a;
?>

// Урок №04 //
//switch
<hr>
<?
$day_num = 3;

switch ($day_num) {
	case 1:
		echo "Понедельник";
		break;
	case 2:
		echo "Вторник";
		break;
	case 3:
		echo "Среда";
		break;
	case 4:
		echo "Четверг";		
	case 5:
		echo "Пятница";
		break;
	case 6:
		echo "Суббота";
		break;
	case 7:
		echo "Воскресенье";
		break;
	default : echo "Такого дня нет";
		break;
}		
		
	echo "<hr>";
//Так лучше не делать!!!
	$a = 2;
	$b = 4;
	
switch (true) {
	case $b > $a:
		echo "OK";
		break;
	case $b == 4:
		echo "Error";
		break;
}

echo "<hr>";
//Циклы: while / do ... while / for / foreach

$i = 1;
$n = 10;

while ($n >= $i){
	echo $n, "<br>";
	$n--;
}	


echo "<hr>";
$i = 1;
$n = 10;
do {
	echo $i, " ";
	$i++;
}
	while ($i <= $n);

echo "<hr>";

for ($i = 1; $i < $n; $i++) {
	echo $i, ", ";
}

echo "<hr>";
echo "Написать скрипт вычисляющий сумму чисел от 1 до n<br>";

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
	$sum += $i;
}
echo "Сумма от 1 до $n = $sum";

echo "<hr>";
echo "Произведение чисел от 1 до n<br>";

$n = 20;
$mul = 0;

for ($i = 1; $i <= $n; $i++) {
	$mul *= $i;
}
echo "Произведение от 1 до $n = $sum";


echo "<hr>";
echo "Сумма чётных чисел от 1 до n<br>";

$n = 20;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
	if ($i%2 == 0) {
		$sum += $i;
	}
}
echo "Сумма чётных чисел от 1 до $n = $sum";
?>
<br>
// Массивы
<br>
<?
$array = array (1, 2, 3, 4, 5, 6, 7, 8, 9); //array (1, 2, 3, ....)
	var_dump($array);
	
	foreach ($array as $index => $number) {
		echo $index, " : ", $number, "<br>";
	}
echo "<hr>";
	for($i = 0; $i < count($array); $i++) {
		echo $i, " : ", $array[$i], "<br>";
	}
?>

Задачки Абрамян
<br>
/// Урок №5<br>

<?/*
		[
		"name" => "Вася",
		"age" => "45",
		"gender" => "Мужской"
		]
*/
?>

<table border="1">
	<thead>
		<tr>
			<th>Имя</th>
			<th>Возраст</th>
			<th>Пол</th>
		</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user):?>
		<tr>
			<td><?=$user['name']?></td>
			<td><?=$user['age']?></td>
			<td><?=$user['gender']?></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

<?
$dict = [
	"car" => ["Автомобиль", "Машина"],
	"cat" => ["Кошка", "Кот"]
]

echo "<hr>";

$products = [
	[
		"name" => "Iphone 7",
		"price" => 600,
		"properties" => [
			[
			"name" => "processor",
			"value" => "i10"
			],
			[
			"name" => "Display",
			"value" => "5,2"
			]
		]
	],
	[
		"name" => "Iphone 6",
		"price" => 450,
		"properties" => [
			[
			"name" => "processor",
			"value" => "i5"
			],
			[
			"name" => "Display",
			"value" => "4,7"
			]
		]
	]
];
?>
<?php foreach($products as $product):?>
	<h2><?=$product["name"]?>: <span><?=$product["price"]?></span>$</h4>
	