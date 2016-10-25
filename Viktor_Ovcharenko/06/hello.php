<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css
	">
    <title>HW_02</title>
</head>
    <body>
        <?
            $name = strip_tags($_REQUEST["name"]);
            $age = strip_tags($_REQUEST["age"]);
            $mes = strip_tags($_REQUEST["mes"]);
            //var_dump($_REQUEST);
            $text = 'Привет, '.$name." ,".$_REQUEST["age"]." лет. <br>Твое сообщение: ".$_REQUEST["mes"];
        ?>
        <? if($_REQUEST["name"] && $_REQUEST["age"]):?>
            <div id="answer">
                <span id = "phon"><?=$text?></span>
            </div>
        <? endif;?>
        <? if(!$_REQUEST["name"] || !$_REQUEST["age"]):?>
            <form action="hello.php" method="" id="form2">
                <div id="error">Вы ввели не все данные, введите еще раз:</div>
                <label for="name" >Введите ваше имя: </label><input type="text" name="name" id="name"><br><br>
                <label for="age" >Введите ваш возраст: </label><input type="number" name="age" id="age"><br><br>
                <textarea cols="21" rows="5" name="mes" value="$_REQUEST["mes"]"></textarea><br><br>
                <input type="submit" name="submit" value="Выбрать" id="submit">
            </form>
        <? endif;?>
    </body>
</html>