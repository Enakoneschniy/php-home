
<h3>Homework #2 </h3>
<?
$age=0;
if($age>18&&$age<=59){
        echo "Вам еще работать и работать";
}
    elseif($age>1&&$age>59){
        echo "Вам пора на пенсию";
}
    elseif($age>1&&$age<=17){
        echo "Вам еще рано работать";
}
    else{
        echo "Неизвестный возраст";
    }


?>