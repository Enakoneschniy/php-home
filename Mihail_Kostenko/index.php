<?

echo "<h1>Hello World</h1>";

$name = 'Петя';
$user_name = "Меня зовут: $name";
?>

<span>Меня зовут: <strong><? echo "$name" ?></strong></span><br>
<span>Меня зовут: <strong><?=$user_name?></strong></span>


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