<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");

if (substr(__FILE__, 38, 2) + 0 <= 10) {
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
            Какой ответ ставится, если продавец (на кассе) спросил про бонусную карту после того, как назвал сумму покупки?<br><br>
            <input id="kt1" class="checkbox" type="radio" name="text" value="Ответ Да" />
            <label for="kt1">Ответ Да</label><br>
            <input id="kt2" class="checkbox" type="radio" name="text" value="Ответ Нет " />
            <label for="kt2">Ответ Нет </label><br>
            <input id="kt3" class="checkbox" type="radio" name="text" value="Ответ Не точно" />
            <label for="kt3">Ответ Не точно</label><br>
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