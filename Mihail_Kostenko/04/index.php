<h1>Урок №04</h4>
<h2>switch</h2>
<hr>
<?
$day_num = 4;

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
		break;		
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

$day_num = 5;
//групировка по дням
switch($day_num){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Будни";
        break;
    case 6:
    case 7:
        echo "Выходные";
        break;
    default: echo "Такого дня нет";
        break;
}

echo "<hr>";
echo "<h2>Циклы: while / do ... while / for / foreach</h2>";

//Циклы: while / do ... while / for / foreach
//Если n меньше i, то выводим n и уменьшаем его на 1 и так далее...
$i = 1;
$n = 10;
while ($n >= $i){
	echo $n, "<br>";
	$n--;
}	
echo "<hr>";


$n = 50;
do {
	echo $i, " ";
	$i++;
}
	while ($i <= $n);
echo "<br>";


for ($i = 1; $i < $n; $i++) {
	echo $i, ", ";
}
echo "<hr>";


for ($i = 1, $j = 2; $i < $n; $i++, $j++) { 
    echo $i, "($j), ";
}
echo "<br><br>";
for ($i = 1; $i < $n; $i += 2) { 
    echo $i, ", ";
}
echo "<hr>";


echo "<h3>Написать скрипт вычисляющий сумму чисел от 1 до n</h3>";

$n = 10;
$sum = 0;

for ($i = 1; $i <= $n; $i++) {
	$sum += $i;
}
echo "Сумма от 1 до $n = $sum";
echo "<hr>";


echo "<h3>Произведение чисел от 1 до n</h3>";

$n = 10;
$mul = 1;

for ($i = 1; $i <= $n; $i++) {
	$mul *= $i;
}
echo "Произведение от 1 до $n = $mul";
echo "<hr>";



echo "<h3>Сумма чётных чисел от 1 до n</h3>";

$n = 10;
$sum = 0;
$sum_not = 0;

for ($i = 1; $i <= $n; $i++) {
    if($i%2 == 0){ 
        $sum += $i;
    }else{
        $sum_not += $i;
    }
}
echo "Сумма четных чисел от 1 до $n = $sum<br>";
echo "Сумма НЕ четных чисел от 1 до $n = $sum_not";
echo "<hr>";


echo "<h3>Написать скрипт вычисляющий сумму четных чисел от 1 до n (continue)</h3>";
$sum_con = 0;
for ($i = 1; $i <= $n; $i++) {
    if($i%2 != 0){ 
        continue;
    }
    $sum_con += $i;
}
echo "Сумма четных чисел от 1 до $n = $sum";
echo "<hr>";

echo "<h3>Скрипт выводящий на экран квадраты числел от 2 до n</h3>";
$n = 5;
for ($i = 2; $i <= $n ; $i++) {
	echo pow($i, 2), ", ";
}
echo "<ht>";
?>

<h2>Массивы</h2>
<?
$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];//$array1 = array (1, 2, 3, 4, 5, 6, 7, 8, 9); для PHP 5.3 и ниже
	var_dump ($array1); //выводим наш массив

//Другой способ вывода массива
echo "<pre>";
print_r($array1);
echo "</pre>";

//Перебор массива с выводом индекса : ключа
foreach ($array1 as $i_a1 => $n_a1) {
    echo $i_a1, " : ", $n_a1, "<br>";
}
echo "<hr>";

for($i = 0; $i < count($array1); $i++){
    echo $i, " : ", $array1[$i], "<br>";
}
echo "<hr>";

echo "<h3>Сумма всех элементов через foreach</h3>";
$sum_array = 0;
foreach ($array1 as $num) {
	echo $sum_array +=$num, " "; //так покажет каждый эллемент
}
	echo '<br>Итоговое значение $sum_array суммы всех элементов массива = ', $sum_array;

echo "<h3>Сумма всех элементов через for</h3>";
$sum_array = 0;
for ($i = 0; $i < count($array1); $i++){
		$sum_array += $array1[$i];
}
	echo 'Сумма всех элементов $sum_array через for = ', $sum_array;
echo "<hr>";

echo "<h3>Пустой массив</h3>";
$ar_num = [];//Пустой массив

$ar_num[4] = 243;
$ar_num[8] = 16;
$ar_num[454] = 340;

var_dump ($ar_num);
echo "<hr>";

$ar_num = [
	4 => 25,
	13 => 48,
	28 => 546
];
var_dump ($ar_num);
echo "<hr>";

$ar = [
	13 => 55
];
for($i = 1; $i <= 10; $i++){
	$ar[$i] = $i;
}
var_dump ($ar);
echo "<hr>";

$ars = [];
for($i = 1; $i <= 10; $i++){
    $ars[] = rand(0, 100);
}
var_dump($ars);
?>
<hr>
<h2>ДЗ: Порешать Задачки Абрамян</h2>
<a href="homework.php">Домашнее задание</a>