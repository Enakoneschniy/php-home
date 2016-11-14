<?php
//Не понятно зачем print вставлен в сам $res и при это он сразу выводится!
//И почему в строке 5-6 - выводятся еденички?
$res = print "<h1>Title</h1>";
print $res;
print $res;
echo "<br>";

$x = 34 + 45;
echo "x = $x";
echo "<br>";

printf('Result = %d, dddd, a = %d', 234, 45);
echo "<br>";

$name = 'Евгений';
$age = 23;
printf('Меня зовут %s, мне %d лет.', $name, $age);
echo "<br>";
echo 'Меня зовут '.$name.' мне '.$age.'лет';
echo "<br>";

$user = [
	'name' => 'Евгений',
	'last_name' => 'Фамилия',
	'age' => 23,
	];
printf('My name %s, I am %d years', $user['name'], $user['age']);
echo "<br>";
