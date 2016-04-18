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
            Что является основанием для вручения продавцам/кассирам ежегодного звания «Гордость компании»?<br><br>

            <input id="kt1" class="checkbox" type="radio" name="text" value="Наличие только максимальных оценок за выполнение Сервисного диалога в течении года" />
            <label for="kt1">Наличие только максимальных оценок за выполнение Сервисного диалога в течении года</label><br>
            <input id="kt2" class="checkbox" type="radio" name="text" value="Наибольшее кол-во оценок по сравнению с другими  " />
            <label for="kt2">Наибольшее кол-во оценок по сравнению с другими  </label><br>
            <input id="kt3" class="checkbox" type="radio" name="text" value="Наличие только максимальных оценок и наибольшее кол-во оценок по сравнению с другими" />
            <label for="kt3">Наличие только максимальных оценок и наибольшее кол-во оценок по сравнению с другими</label><br>
            <input id="kt4" class="checkbox" type="radio" name="text" value="Не уверен(а) в ответе" />
            <label for="kt4">Не уверен(а) в ответе</label><br>

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