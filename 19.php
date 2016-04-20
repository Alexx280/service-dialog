<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$text=$_POST['text1'].$_POST['text2'].$_POST['text3'].$_POST['text4'].$_POST['text5'].
      $_POST['text6'].$_POST['text7'].$_POST['text8'].$_POST['text9'].$_POST['text10'].
      $_POST['text11'].$_POST['text12'].$_POST['text13'].$_POST['text14'].$_POST['text0'].
      $_POST['text01'];
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $text. "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p><br/>

        <form method="post" action="<?php echo(substr(__FILE__, 38, 2) + 1) ?>.php" style="">
            Ваши вопросы и пожелания<br><br>

            <br>
            <br>
            <br>
            <br>
            <br><br><br>

            <p><textarea rows="7" class="text" name="text"></textarea></p><br><br>

            <div id="button-next" style="text-align: center;">
                <input type="submit" value="Закончить" class="table-form"/><br>
            </div>

        </form>


    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>