<?php
session_start();
include_once 'head1.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['text'] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

$code = "UPDATE `motiv` SET `code` = '" . rand(1000, 9999) . "' WHERE `lama_id`=" . $_SESSION['id_motiv'];
$res = $link->query($code);
unset ($_SESSION['id_motiv']);

?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p><br/>
        <center><img src='pic/test_ok1.png'></center>
        <br>

        <p class='ti'>

            Спасибо за Ваши ответы. <br>
        </p>

    </div>
</div>

<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>