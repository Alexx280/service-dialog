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

        <p class="tq"></p><br/>

        <form method="post" action="<?php echo(substr(__FILE__, 38, 2) + 1) ?>.php" style="">
            Что является основанием для вручения продавцам/кассирам ежегодного звания «Гордость компании»?<br><br>

            А. Максимальные оценки кассира в течении года <br>
            В. Наибольшее кол-во оценок по сравнению с другими кассирами <br>
            С. Наибольшее кол-во максимальных оценок по сравнению с другими <br>
            D. Не знаю и не понимаю <br>
            <br><br><br>

            <p><textarea rows="7" class="text" name="text12"></textarea></p><br><br>

            <div style="text-align: center;">
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