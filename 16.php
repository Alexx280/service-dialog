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
            Какую информацию вы просматриваете в программе ТП? (возможно несколько вариантов)<br><br>
            <input id="kt1" class="checkbox" type="checkbox" name="text1" value="Подробную анкету" />
            <label for="kt1">Подробную анкету</label><br>
            <input id="kt2" class="checkbox" type="checkbox" name="text2" value="Отчет по анкетам" />
            <label for="kt2">Отчет по анкетам   </label><br>
            <input id="kt3" class="checkbox" type="checkbox" name="text3" value="Отчет по кассирам" />
            <label for="kt3">Отчет по кассирам</label><br>
            <input id="kt4" class="checkbox" type="checkbox" name="text4" value="Отчет Итоги проверок по магазинам" />
            <label for="kt4">Отчет Итоги проверок по магазинам</label><br>

            <div id="button-next" style="text-align: center;">
                <input type="submit" value="Дальше" class="table-form"/><br>
            </div>

        </form>

        <div class="strings"><p>15/18</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>