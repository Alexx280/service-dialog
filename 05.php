<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['text' . $chislo] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p> <br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Каким образом рассчитывается оценка по итогам проверки?<br>
            <br><br><br>
            <br><br><br>
            <br>
            <br>
            <!--
            Укажите верные утверждения:<br /><br />
            <input id="ot1" class="checkbox" type="checkbox" name="otv1" value="0" />
            <label for="ot1">Для получения доступа к ресурсам сети сотруднику необходимо позвонить Администраторам корпоративной сети</label><br>
            <input id="ot2" class="checkbox" type="checkbox" name="otv2" value="0" />
            <label for="ot2">Для получения доступа к ресурсам сети сотруднику необходимо написать обращение системным администраторам (итилиум) или обратиться в Руководителю</label><br>
            <input id="ot3" class="checkbox" type="checkbox" name="otv3" value="0" />
            <label for="ot3">Для получения доступа к ресурсам сети сотруднику сначала обратиться в отдел информационной безопасности, и затем к Администраторам корпоративной сети</label><br>
            <input id="ot4" class="checkbox" type="checkbox" name="otv4" value="0" />
            <label for="ot4">Ответственность за соблюдения правил информационной безопасности несут только руководители подразделений и служба безопасности</label><br>
            <input id="ot5" class="checkbox" type="checkbox" name="otv5" value="0" />
            <label for="ot5">Ответственность за соблюдения правил информационной безопасности несут все сотрудники</label><br>-->
            <p><textarea rows="7" cols="133" name="text05"></textarea></p><br><br>


            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>

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