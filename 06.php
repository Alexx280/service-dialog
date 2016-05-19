<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$text=$_POST['text'];
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['text'] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p> <br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Каким образом рассчитывается оценка по итогам проверки?<br><br>
            <input id="em1" class="checkbox" type="radio" name="text" value="Оценка проставляется покупателем" />
            <label for="em1">Оценка проставляется покупателем</label> <br>
            <input id="em2" class="checkbox" type="radio" name="text" value="Оценка проставляется в зависимости от кол-ва выполненных фраз" />
            <label for="em2">Оценка проставляется в зависимости от количества выполненных фраз</label> <br>
            <input id="em3" class="checkbox" type="radio" name="text" value="Оценка проставляется от количества и точности выполненных фраз." />
            <label for="em3">Оценка проставляется в зависимости от количества и точности выполненных фраз.</label> <br>
            <input id="em4" class="checkbox" type="radio" name="text" value="Не знаю" />
            <label for="em4">Не знаю</label> <br>

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
<!--<a href="6.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>