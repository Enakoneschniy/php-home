<h3>Homework #4.1 </h3>
<?
$sum=0;
$n=20;
for($i=1;$i<$n;$i+=3){
    $sum+=$i;
}
echo "$sum";
?>

<h3>Homework #4.2 </h3>
<?
$n=10;
    for($i = 1; $i <= $n; $i++) {
    $arr[$i] = $i*$i;
}
    var_dump($arr);

?>

<h3>Homework #4.3 </h3>
<?
$array=[];
$n=20;
for($i = 0; $i <= $n; $i++) {
    if($i%2>0){
        $array[$i] =1;
    }
    else{
        $array[$i] =0;
    }

}
var_dump($array);

?>

<h3>Homework #4.4 </h3>
<?
$d=[1,2,3,7,3,2,8,5,1];
foreach($d as $k=>$n) {
    if ($k !== $k) {
        if ($d[$k] == $d[$k]){
            $d[$k] = $r;

    }echo " $r";
    }
    else {
        echo "No";
    }
}
echo "<br>";

for($i = 0; $i < count($d); $i++) {
    if ($i !== $i) {
        if ($d[$i] == $d[$i]) {
            $d[$i] = $f;
        }
        echo "$f";
    } else {
        echo "No";
    }
}

?>