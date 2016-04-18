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

        <form method="post" action="<?php echo(substr(__FILE__, 38, 2) + 1) ?>.php">
            Что означает ответ " - " в анкете?<br><br>

            <input id="kt1" class="checkbox" type="radio" name="text" value="Когда выполнение фразы не требовалось в данной ситуации" />
            <label for="kt1">Когда выполнение фразы не требовалось в данной ситуации</label><br>
            <input id="kt2" class="checkbox" type="radio" name="text" value="Когда фраза не сказана" />
            <label for="kt2">Когда фраза не сказана</label><br>
            <input id="kt3" class="checkbox" type="radio" name="text" value="Когда непонятно сказана фраза или нет (тихо, невнятно и т.п.) " />
            <label for="kt3">Когда непонятно сказана фраза или нет (тихо, невнятно и т.п.) </label><br>
            <input id="kt4" class="checkbox" type="radio" name="text" value="Не уверен(а) в ответе" />
            <label for="kt4">Не уверен(а) в ответе</label><br>

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>

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