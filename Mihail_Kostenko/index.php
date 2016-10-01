<?

echo "<h1>Hello World</h1>";

$name = 'Петя';
$user_name = "Меня зовут: $name";
?>

<span>Меня зовут: <strong><? echo "$name" ?></strong></span><br>
<span>Меня зовут: <strong><?=$user_name?></strong></span>