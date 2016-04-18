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
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['text'] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p><br/>

        <form method="post" action="<?php echo(substr(__FILE__, 38, 2) + 1) ?>.php" style="">
            Просматриваете ли вы анкету с подробными ответами и комментариями ТП в программе?<br><br>

            <input id="kt1" class="checkbox" type="radio" name="text" value="Да, всегда" />
            <label for="kt1">Да, всегда</label><br>
            <input id="kt2" class="checkbox" type="radio" name="text" value="Только если низкие оценки" />
            <label for="kt2">Только если низкие оценки</label><br>
            <input id="kt3" class="checkbox" type="radio" name="text" value="Нет" />
            <label for="kt3">Нет</label><br>
            <input id="kt4" class="checkbox" type="radio" name="text" value="Не знаю, как просматривать анкеты" />
            <label for="kt4">Не знаю, как просматривать анкеты</label><br>


            <div id="button-next" style="text-align: center;">
                <input type="submit" value="Дальше" class="table-form"/><br>
            </div>

        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>