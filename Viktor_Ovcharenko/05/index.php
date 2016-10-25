<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>homework_01</title>
    </head>
    <body>
        <?
        echo "Задание 1<br>";
        $age = mt_rand(1, 100);
        if ($age >= 18 && $age <= 59) {
            echo 'Вам ещё работать и работать';
        } elseif($age > 59) {
            echo 'Вам пора на пенсию';
        } elseif ($age >= 1 && $age <= 17) {
            echo 'Вам ещё рано работать';
        } else {
            echo 'Неизвестный возраст';
        }
        echo '<hr>';
        echo "Задание 2.1<br>";
        $cols = 5;
        $rows = 6;
        $mul = 1;
        echo "<table border='1'>";
        for ($i = 1; $i <= $cols; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $rows; $j++) {
                if ($i === 1 || $j === 1 ) {
                    $mul = $i * $j;
                    echo "<td class='first'>$mul</td>";
                } else {
                    $mul = $i * $j;
                    echo "<td>$mul</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>Задание 2.1<br><br>";
        for ($i = 1; $i <= 50; $i++) {
            if ($i % 2 != 0) {
                echo "$i<br>";
            }
        }
        echo '<hr>';
        echo "Задание 3.1<br><br>";
        $n = mt_rand(1, 100);
        $sum = 0;
        for ($i = 1; $i <= $n; $i += 3) {
                $sum += $i;
        }
        echo $sum;
        echo '<br><br>';
        echo "Задание 3.2<br><br>";
        $n = mt_rand(1, 10);
        $array = [];
        for ($i = 0; $i < $n; $i++) {
            $array[$i] = pow($i, 2);
        }
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
        echo '<br><br>';
        echo "Задание 3.3<br><br>";
        $n = mt_rand(1, 10);
        $array = [];
        for ($i = 0; $i < $n; $i++) {
            if ($i % 2 == 0) {
                $array[$i] = 0;
            } else {
                $array[$i] = 1;
            }
        }
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
        echo '<br><br>';
        echo "Задание 3.4<br><br>";
        $length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];
        for ($i = 0; $i < $length; $i++) {
                $array[$i] = mt_rand(1, 10);
        }
        $arrUniq = [];
        $uniq = 'Данный массив состоит из уникальных элементов';
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($arrUniq); $j++) {
                if ($array[$i] == $arrUniq[$j]) {
                    $uniq = 'Данный массив не состоит из уникальных элементов';
                }
            }
            $arrUniq[$i] = $array[$i];
        }
        echo $uniq.'<br><br>';
        echo "Задание 3.5<br><br>";
        $length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(1, 10);
        }
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
        $arrUniq = [];
        $uniq = true;
        for ($i = 0; $i < count($array); $i++) {
            $uniq = true;
            for ($j = 0; $j < count($arrUniq); $j++) {
                if ($array[$i] == $arrUniq[$j]) {
                    $uniq = false;
                }
            }
            if ($uniq == true) {
                $arrUniq[] = $array[$i];
            }
        }
        echo "<pre>";
        var_dump($arrUniq);
        echo"</pre>";
        echo "Задание 3.6<br><br>";
        $length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];
       for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(-10, 10);
        }
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] < 0) {
                $array[$i] = 0;
            }
        }
        echo "<pre>";
        var_dump($arrUniq);
        echo"</pre>";
        echo "Задание 3.7<br><br>";
        $length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(1, 10);
        }
        echo "Первый способ:";
        sort($array);
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
        echo "Второй способ:";
        $array = [];
        for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(1, 10);
        }
        $memory = 0;
        $check = true;
        while ($check) {
            $check = false;
            for ($i = 0; $i < count($array) - 1; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    $memory = $array[$i + 1];
                    $array[$i + 1] = $array[$i];
                    $array[$i] = $memory;
                    $check = true;
                }
            }
        }
        echo "<pre>";
        var_dump($array);
        echo"</pre>";
        echo"<hr>";
        ?>
        <form action="" method="">
            <label for="x" >Введите x: </label><input type="number" name="x" id="x"><br><br>
            <label for="y" >Введите y: </label><input type="number" name="y" id="y"><br><br>
            <input type="submit" name="submit" value="Выбрать">
        </form>
        <img src="unspecified.jpg"><br>
        <?
            $x = $_REQUEST["x"];
            $y = $_REQUEST["y"];
            if ((sqrt(pow($x, 2) + pow($y, 2)) <= 1) || ($x <= 0 && $y <= 0 && $x + $y >= -2)) {
                echo "Точка попадает в заштрихованную область";
            } else {
                echo "Точка не попадает в заштрихованную область";
            }
            echo"<hr>";
        ?>
        <form action="" method="">
            <label for="a" >Введите a: </label><input type="number" name="a" id="a"><br><br>
            <label for="b" >Введите b: </label><input type="number" name="b" id="b"><br><br>
            <input type="submit" name="submit" value="Выбрать">
        </form>
        <?
            $a = $_REQUEST["a"];
            $b = $_REQUEST["b"];
            if ($b > $a) {
                $x = $a + $b / sqrt($a);
            } elseif ($b == $a) {
                $x = 300;
            } else {
                $x = $b / $a + 33;
            }
            echo $x;
        ?>
    </body>
</html>