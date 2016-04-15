<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");

if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}

$text=$_POST['text1'].$_POST['text2'].$_POST['text3'].$_POST['text4'];

$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $text . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"> </p><br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Какова цель проверок Тайными покупателями?
            <p class="mini">
                <input id="em1" class="checkbox" type="checkbox" name="text1" value="Осуществление контроля соблюдения стандартов обслуживания. <br>" />
                <label for="em1">Осуществление контроля соблюдения стандартов обслуживания </label> <br>
                <input id="em2" class="checkbox" type="checkbox" name="text2" value="Повышение лояльности персонала к покупателям. <br>" />
                <label for="em2">Повышение лояльности персонала к покупателям </label> <br>
                <input id="em3" class="checkbox" type="checkbox" name="text3" value="Обратная связь покупателей о качестве обслуживания в магазине. <br>" />
                <label for="em3">Обратная связь покупателей о качестве обслуживания в магазине </label> <br>
                <input id="em4" class="checkbox" type="checkbox" name="text4" value="Развитие профессионального уровня сотрудников магазина. <br>" />
                <label for="em4">Развитие профессионального уровня сотрудников магазина </label> <br>


            </p>

            <!--<p><textarea rows="1" class="text" name="text03"></textarea></p><br>-->

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>
        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
<!--<a href="4.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>