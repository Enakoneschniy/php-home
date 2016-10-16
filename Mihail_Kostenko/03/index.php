<h1>Урок №3</h1>
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


