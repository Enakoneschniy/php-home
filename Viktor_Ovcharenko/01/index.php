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


        echo "Задание 3.5<br><br>";

        $length = mt_rand(1, 10);//Создаем уникальный маасив
        $array = [];

        for ($i = 0; $i < $length; $i++) {
            $array[$i] = mt_rand(1, 10);
        }

        $arrUniq = array_unique($array);

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

        sort($array);

        echo "<pre>";
        var_dump($array);
        echo"</pre>";

        ?>
    </body>
</html>
