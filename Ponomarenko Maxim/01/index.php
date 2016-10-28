
<?//Z 1.1//

echo "<br>";

$age  =  rand(1 , 100);
print " $age" ;
?>
<?
echo "<br>";
?>




<?
echo "Z 1.2<br>";
        $age = rand(1, 100);
      if ($age >= 18 and $age <= 59) {
            echo"Вам ещё работать и работать";
        } elseif($age > 59) {
            echo"Вам пора на пенсию";
        } elseif ($age >= 1 and $age <= 17) {
            echo"Вам ещё рано работать";
        } else {
            echo"Неизвестный возраст";
        }
        echo"<hr>";
?>



 <br>________________________________________________________</br>



 <?//Z 2.1 and Z 2.2 and Z 2.3//
 $cols  =   rand(1, 10);// 
 $rows  = rand(1, 10); //
 $sum   =   $cols*$rows;
  
 function table($cols, $rows,$color='green'){
   echo "<table border='1' align='center'>";
  for($tr=1;$tr<=$cols;$tr++){
     echo "<tr>";
 for ($td=1;$td<=$rows;$td++){
    if(  $tr==1  or  $td==1){
echo "<th style='background:$color'>".$tr*$td."</th>";}
 
    else{
   echo "<td>".$tr*$td."</td>";}
    }
  }
echo "</table>";
}
 
table($sum,$sum,grey)//можно по условию table($cols,$rows,red)

 ?>
 <?//Z 3
 echo "Z 3.1<br>";
 for ($i = 50; $i >= 0; $i-=2) {
             
                echo "$i<br>";
            }
 ?>
