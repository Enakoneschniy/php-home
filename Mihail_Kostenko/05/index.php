<h2>ДЗ: Матрицы</h2>
<a href="homework.php">Домашнее задание</a><br><br>
<?php
$dictionary = [
	"car" => "Автомобиль",
	"cat" => "кошка",
    "dog" => "Пес",
    "apple" => "Яблоко"
];
echo $dictionary["cat"], "<br>";
var_dump($dictionary);

echo "<h2>Массив в массиве</h2>";
$dictionary = [
    "car" => ["Автомобиль", "Машина"],
    "cat" => ["Кошка", "Кот"],
    "dog" => ["Пес", "Собака"],
    "apple" => "Яблоко"
];

echo $dictionary["cat"][0], "<br>";
echo $dictionary['dog'][1], "<br>";
var_dump($dictionary);
echo "<hr>";
?>

<h2>Форма ввода</h2>
<form>
	<input type="text" name="word">
	<input type="submit" value="Перевод">
</form>

<?php
// Вот тут не совсем понятно!!! Надо закрепить!!!
$word = $_REQUEST["word"];
$traslate_word = $dictionary[$word];
if(is_array($traslate_word)){
    foreach ($traslate_word as $word) {
        echo $word,"<br>";
    }
}else{
    echo $traslate_word;
}

echo "<br>";
var_dump($_REQUEST);
var_dump($dictionary);
echo "<hr>";

$users = [
    [
        "name" => "Вася",
        "age" => 45,
        "gender" => "Мужской"
    ],
    [
        "name" => "Оксана",
        "age" => 21,
        "gender" => "Женский"
    ],
    [
        "name" => "Петя",
        "age" => 33,
        "gender" => "Мужской"
    ],
    [
        "name" => "Катя",
        "age" => 24,
        "gender" => "Женский"
    ]
];
?>

<table border="1" cellspacing="0">
	<thead>
		<tr>
		<th>Имя</th>
		<th>Возраст</th>
		<th>Пол</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $user):?>
			<tr>
				<td><?=$user['name']?></td>
				<td><?=$user['age']?></td>
				<td><?=$user['gender']?></td>
			</tr>
		<?php endforeach;?>
	</tbody>
</table>

<?php
$dictionary['human'] = ["Человек", "Существо  разумное"];
$dictionary[] = "Блабалв бал";
$dictionary[] = "Ghjcn nfr";

var_dump($dictionary);
echo "<hr>";

$products = [
    [
        "name" => "Iphone 7",
        "price" => 600,
        "properties" => [
            [
                "name" => "Processor",
                "value" => "i10"
            ],
            [
                "name" => "Display",
                "value" => "5,5"
            ],
            [
                "name" => "Camera",
                "value" => "12Mpx"
            ]
        ]
    ],
    [
        "name" => "Iphone 6",
        "price" => 500,
        "properties" => [
            [
                "name" => "Processor",
                "value" => "i9"
            ],
            [
                "name" => "Display",
                "value" => "5,2"
            ],
            [
                "name" => "Memory",
                "value" => "128GB"
            ]
        ]
    ]
];
?>

<?php foreach($products as $product):?>
	<h4><?=$product['name']?>: <?=$product['price']?>$</h4>
	<div>Свойства:</div>
	<?php if(count($product["properties"]) > 0):?>
	<ul>
		<?php foreach ($product['properties'] as $property):?>
		<li><?=$property['name']?>: <?=$property['value']?></li>
		<?php endforeach;?>
	</ul>
	<?php endif;?>
<hr>
<?php endforeach;?>

<?php
$matrix = [
    [1,2,3,4,5],
    [1,2,3,4,5],
    [1,2,34,4,5],
    [1,2,3,4,5],
    [1,2,3,4,5]
];

echo $matrix[2][2];
?>

<h2>ДЗ: Матрицы</h2>
<a href="homework.php">Домашнее задание</a>