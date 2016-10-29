<?php
echo 'Homework №8 Хлестков Алексей<br>';
echo '<pre>';
echo 'Задание №1<br>';
//Реализовать функцию которая принимает в качестве аргумента массив чисел.Функция возвращает массив.
//Возвращаемый массив получается путем возведения в куб каждого элемента входного массива.
function ar1($a){
    $aRes = [];
    for ($i=0; $i<count($a); $i++) {
        $aRes[]=$a[$i] * $a[$i] * $a[$i];
    }
    return ($aRes);
}
$arr = [1,4,5,3,2,6];
echo implode(',',$arr) . '<br>';
echo implode(',',ar1($arr)) . '<br>';
echo '<br>';

echo 'Задание №2 (с использованием "func_get_args()")<br>';
//Реализовать функцию которая принимает бесконечное количество аргументов.
//каждый аргумент - является массивом чисел. Предполагаем что все передаваемые массивы -одинаковой длины.
// В результате работы функции должен быть возвращен массив у которого каждый элемент
// это сумма элементов всех массивов с таким же индексом.
// Например:0-й элемент возвращаемого массива равен сумме нулевых элементов всех переданных массивов в функцию
function ar2(){
    $aRes = [];
    $numargs = func_num_args();
    $arg_list = func_get_args();
    for ($i=0; $i<$numargs; $i++){
        for ($j=0; $j<count($arg_list[$i]); $j++){
            $aRes[$j] = $aRes[$j] + $arg_list[$i][$j];
        }
    }
    return ($aRes);
}

$arr1 = [1,4,5,3,2,6,4,2,7,6,8,6,3];
$arr2 = [4,3,4,6,3,5,6,7,8,3,5,6,7];
$arr3 = [4,5,2,6,8,5,6,7,8,7,4,4,4];
echo implode(',',$arr1) . '<br>';
echo implode(',',$arr2) . '<br>';
echo implode(',',$arr3) . '<br>';
echo implode(',',ar2($arr1, $arr2, $arr3)) . '<br><br>';

echo 'Задание №3 (с использованием "func_get_args()")<br>';
//Расширить предыдущее задание.Передаваемые массивы должны быть разной длины.
//Длина возвращаемого массива должна быть равна длине наибольшего массива.
//функции function ar2() до лампочки какой длинны массивы обрабатывать
function ar31(...$arguments){
    $aRes = [];
    for ($i = 0; $i < count($arguments[0]); $i++) {
        for ($j = 0; $j < count($arguments[0][$i]); $j++) {
            $aRes[$j] = $aRes[$j] + $arguments[0][$i][$j];
        }
    }
    return ($aRes);
}

$arr1 = [1,4,5,3,2,6,4,2,7,6,8,6,3];
$arr2 = [4,3,4,6,3,5];
$arr3 = [4,5,2,6,8,5,7,4,4,4];
echo implode(',',$arr1) . '<br>';
echo implode(',',$arr2) . '<br>';
echo implode(',',$arr3) . '<br>';
echo implode(',',ar2($arr1, $arr2, $arr3)) . '<br><br>';

echo 'Задание №3 (с использованием "func(...$a)"<br>';
echo implode(',',$arr1) . '<br>';
echo implode(',',$arr2) . '<br>';
echo implode(',',$arr3) . '<br>';
$arg = [$arr1, $arr2, $arr3];
echo implode(',',ar31($arg)) . '<br><br>';

echo 'Задание №4 (с использованием "func_get_args()")<br>';
//Реализовать функцию которая принимает любое количество массивов в качествеа ргументов.
//Вернуть массив который состоит из максимальных значений каждого массива.
//То есть если передаем 4 массива то количество элементов в выходном массиве будет равно 4
function ar4(){
    $aRes = [];
    $numargs = func_num_args();
    $arg_list = func_get_args();
    for ($i=0; $i<$numargs; $i++){
        $tmp = $arg_list[$i];
        rsort($tmp);
         $aRes[$i] = $tmp [0];
    }
    return ($aRes);
}

$arr1 = [1,4,5,3,2,6,4,2,7,9,8,6,3];
$arr2 = [4,3,4,6,3,5,6,5,6,7];
$arr3 = [4,5,2,6,8,5,6,7,8,7,4,4];
$arr4 = [4,5,6,7,8,7,4,4];
echo implode(',',$arr1) . '<br>';
echo implode(',',$arr2) . '<br>';
echo implode(',',$arr3) . '<br>';
echo implode(',',$arr4) . '<br>';
echo implode(',',ar4($arr1, $arr2, $arr3, $arr4)) . '<br><br>';

echo 'Задание №* <br>';

function arStarr($a){
    $aRes = [];
    for ($i=0; $i<count($a); $i++){
        for ($j=0; $j<count($a[$i]); $j++){
            $aRes[$i] = $aRes[$i] + $a[$j][$i] ;
        }
    }
    return ($aRes);
}

$arr1 = [[1, 2, 3],[3, 4, 5],[6, 7, 8]];
echo '[' . implode(',' ,$arr1[0])  . '][' . implode(',' ,$arr1[1]) . ']['. implode(',' ,$arr1[2]) . ']<br>';
echo implode(',',arStarr($arr1)) . '<br><br>';


?>