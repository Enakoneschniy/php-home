<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?
function make_matrix(){
    //создание массива 10х10
    $r1 = array(1,1,1,1,1,1,1,1,1,1);
    $r2 = array(1,2,1,1,1,1,1,1,1,1);
    $r3 = array(1,1,1,1,1,1,1,1,1,1);
    $r4 = array(1,1,1,1,1,1,1,1,1,1);
    $r5 = array(1,1,1,1,1,1,1,1,1,1);
    $r6 = array(1,1,1,1,1,1,1,1,1,1);
    $r7 = array(1,1,1,1,1,1,1,1,1,1);
    $r8 = array(1,1,1,1,1,1,1,1,1,1);
    $r9 = array(1,1,1,1,1,1,1,1,1,1);
    $r10 = array(1,1,1,1,1,1,1,1,1,1);
    $arr = array($r1, $r2, $r3, $r4, $r5, $r6 , $r7, $r8, $r9, $r10);
    $v = 1;
    for($i=0; $i<10; $i++)
        for($j=0; $j<10; $j++) {
            $arr[$i][$j] = $v++;
        }
    return($arr);
}

function make_matrix1(){
    $m1 = make_matrix();
    $v = 1;
    for($y=0; $y<10; $y++) {
        for ($x = 0; $x < 10; $x++) {
            if ($y < 1 ){
                $m1[$x][$y] = $v++;
            }else {
                $m1[$x][$y] = $m1[$x][0] + $m1[$x][$y-1];
            }
        }
    }
    return($m1);
}

function make_matrix2(){
    $m1 = make_matrix();
    $d = 0;
    for($y=0; $y<10; $y++) {
        for ($x = 0; $x < 10; $x++) {
            if ($y = $d++){
                $m1[$x][$y] = 1;
            }
        }
    }
    $d=9;
    for($y = 0; $y <10; $y++) {
        for ($x = 0; $x <10 ; $x++) {
            if ($x == $d){
               $m1[$x][$y] = 2;
                $d--;
            }else{
                if (!($m1[$x][$y] == 1)) $m1[$x][$y] = 0;
            }
        }
    }

    for($x = 0; $x <10; $x++) {
        $one = true;
        $two = true;
        for ($y = 0; $y <10 ; $y++) {
           if ($m1[$x][$y] == 1) $one = false;
           if ($m1[$x][$y] == 2) $two = false;
           if ((!$one  && $two) && ($m1[$x][$y] == 0))  $m1[$x][$y] = 3;
           if (($one  && !$two) && ($m1[$x][$y] == 0))  $m1[$x][$y] = 5;
           if (($one  &&  $two) && ($m1[$x][$y] == 0))  $m1[$x][$y] = 6;
           if ((!$one  &&  !$two) && ($m1[$x][$y] == 0))  $m1[$x][$y] = 4;
        }
    }


    return($m1);
}

function make_matrix3(){
    $m1 = make_matrix();
    for($y=0; $y<10; $y++) {
        for ($x = 0; $x < 10; $x++) {
            $m1[$x][$y] = "";
            }
        }
    $d = 0;
    for($y=0; $y<10; $y++) {
        for ($x = 0; $x < 10; $x++) {
            if ($y = $d++){
                $m1[$x][$y] = 1;
            }
        }
    }
    $m1[0][0] = 1;
    for($x=1; $x<10; $x++) {
        for ($y = 0; $y < 10; $y++) {
            if ($m1[$x][$y] == 1) break;
            $m1[$x][$y]= $m1[$x-1][$y-1] + $m1[$x-1][$y];
        }
    }
    return($m1);
}

function show_table($a){?>
    <table border="1" cellspacing="0" width= 600 height = 600 align="center">
    <tbody>
    <?php
        for($i=0; $i<10; $i++) {
              ?><tr><?
            for ($j = 0; $j < 10; $j++) {
                 ?><td align="center"><?=$a[$i][$j]?></td><?
            }
              ?></tr><?
        }
    ?>
    </tbody>
    </table>
<?}

?>
<b1>Lesson 5</b1><br>
<b1>Copyright@OleksiiKhliestkov</b1><br>

<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST" enctype="multipart/form-data">
    <div>

        <input type="checkbox" name="check" value="0">Стартовая матрица <br>
        <input type="checkbox" name="check" value="1">Матрица 1 <br>
        <input type="checkbox" name="check" value="2">Матрица 2 <br>
        <input type="checkbox" name="check" value="3">Матрица 3 <br>

        <input type="submit"  value="Выбор типа матрицы">
    </div>
</form>
<? switch ($_POST[check]) {
    case 0:
        echo "Matrix start<br>";
        $m = make_matrix();
        show_table($m);
        break;
    case 1:
        echo "Matrix 1<br>";
        $m = make_matrix1();
        show_table($m);
        break;
    case 2:
        echo "Matrix 2<br>";
        $m = make_matrix2();
        show_table($m);
        break;
    case 3:
        echo "Matrix 3<br>";
        $m = make_matrix3();
        show_table($m);
        break;

    default:
        break;
}
?>


</body>
</html>