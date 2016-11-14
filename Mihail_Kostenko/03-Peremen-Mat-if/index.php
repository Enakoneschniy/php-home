<h1>Урок №3</h1>
<h3>Переменные и их типы</h3>
<?
//Задаем наши переменные указывая их тип
$a = 2; //integer
$b = 4.5; //float
$c = "hello, i am string"; //string
$d = true; //boolean (true/false)
$f = array(); //array []
$g = null; //null

//выводим тип наших переменных на экран
echo gettype ($a), "<br>";
echo gettype ($b), "<br>";
echo gettype ($c), "<br>";
echo gettype ($d), "<br>";
echo gettype ($f), "<br>";
echo gettype ($g), "<br>";
echo "<hr>";

//выводим нашу переменную и её тип на экран
//Обратите внимание на одинарные и двойные кавычки в теге echo!!!
echo '$a = ', "$a - ", gettype ($a), "<br>";
echo '$b = ', "$b - ", gettype ($b), "<br>";
echo '$c = ', "$c - ", gettype ($c), "<br>";
echo '$d = ', "$d - ", gettype ($d), "<br>";
echo '$f = ', "$f - ", gettype ($f), "<br>";
echo '$g = ', "$g - ", gettype ($g), "<br>";

//Принудительно меняем тип переменной
echo "<hr>";
echo 'Изначально переменная $a =', $a, ' и имеет тип - ', gettype ($a), "<br>";
echo 'Теперь, наша переменная $a так и равняется ', $a, ' но, принудительно имеет тип - ',gettype ((string)$a), "<br>";
echo 'И вновь, перемнна $a получила тип - ', gettype ($a);
echo "<hr>";

//Меняем переменную $а на постоянку
echo '$a = ', "$a - ", gettype ($a), "<br>";
$a = gettype ((string)$a);
echo '$a = ', "$a - ", gettype ($a), "<br>";
?>

<h3>Математические функции</h3>
<?
$a = 4;
$b = 6;

$x = $a + $b;
echo '$a = ', $a, "<br>";
echo '$b = ', $b, "<br>";
echo '$x = $a + $b = ', $x, "<br>";

//Сначало выводим значение и сразу прибавляем +1, и выводим еще раз
echo '$a++ = ', $a++, "<br>";
echo '$a = ', $a, "<br>";

//Сначало прибавляем и выводим уже с +1
echo '++$b = ', ++$b, "<br>";
echo '$b = ', $b, "<br>";
echo "<hr>";

//Константы define и const
define ('PI', 3.14);
echo PI, "<br>";

const MY_PI = 3.15;
echo MY_PI, "<br>";
echo "<hr>";

$a = '1';
$b = 4;
echo $a + $b, "<br>";

//данная строка равняется: $b = $b +18
$b +=18;
echo $b, "<br>";
echo "<hr>";

//данная формулировка приравнивает $c к $b на постоянной основе ПРИЧЁМ в ОБЕ стороны!!!
$c = &$b;
echo $c, "<br>";

$b = 45;
echo $c, "<br>";

$c = 50;
echo $b, "<br><br>";

//отменяет переменные
unset ($c, $b);
$b = 600;

echo '$b = ', $b, "<br>";
echo '$c = ', $c, "<br>";
?>

<h3>Условия</h3>
<?
$a = '3';
$b = 3;

//Стандартное условие если, или, иначе
if ($a > $b) {
	echo "a больше b";
}
	elseif ($a < $b) {
		echo "a меньше b";
	}
	else {
		echo "a равно b";
	}
echo "<hr>";

//Данное сравнение сравнивает значения
if ($a == $b) {
	echo "OK";
}
	else {
		echo "Error";
	}
echo "<br>";
	
//а такое сравнение сравнивает и тип этого значения!
if ($a === $b) {
	echo "OK";
}
	else {
		echo "Error";
	}
echo "<hr>";

//тоже самое только НЕ равно...
if ($a != $b) {
	echo "OK";
}
	else {
		echo "Error";
	}
echo "<br>";

if ($a !== $b) {
	echo "OK";
}
	else {
		echo "Error";
	}
echo "<hr>";

// Я НЕ ПОНЯЛ ЧТО ЗДЕСЬ ПРОИСХОДИТ!!!
$a = 5;
$b = !!$a;

echo gettype ($b), "<br>";

if (!!$a) {
	echo "OK";
} else {
	echo "Error";
}
echo "<hr><hr>";

//Приколы как можно прятать и передавать переменные
$var = 45;
$var2 = 64;
$wtf = 'var2';
echo $$wtf, "<br>";

echo "<h3>Тернарный оператор</h3>";
$z = 2;
$a = isset($z) ? $z : 0; //Тернанрный оератор
//Если переменная Z установленна, A=Z, иначе A=0

//Код сверху равен данному коду:
if(isset($z)){
    $a = $z;
}else{
    $a = 0;
}
?>

//Не понятный IF который дублирует условия!?!?!<br>
<?if($a == 0):?>
    <span style="color:red;"><?=$a?></span>
    <div>
        <?if(true):?>
            <span>да, да, да! а=0!</span>
        <?else:?>
            не, А не равно нулю :(
        <?endif?>
    </div>
<?else:?>    
<span style="color:red;"><?=$a?></span>
<?endif?>


