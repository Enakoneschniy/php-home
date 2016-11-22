<h3>Homework #3 </h3>
<?
$cols=5;
$rows=6;
?>
<table border="1">
<?
for($tr=1; $tr<=$rows; $tr++){
    echo "<tr>";
        for($td=1; $td<=$cols; $td++) {
            if($td==1 || $tr==1){
                echo "<th>",$tr*$td,"</th>";
                }
            else{
                echo  "<td >",$tr*$td,"</td>";
                }
        }
        echo "</tr>";
}
?>
</table>

<?
echo "<hr>";
for($i=1; $i<50; $i+=2){
    echo "$i","<br>";
}


?>
