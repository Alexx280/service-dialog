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

$code = "UPDATE `motiv` SET `code` = '" . rand(1000, 9999) . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($code);


$login = "SELECT * FROM `motiv` WHERE id_motiv= '" . $_SESSION['lama_id'] . "'";
$res = $link->query($login);
$row = $res->fetch_assoc();
if ($row['quest01']!= 'NULL' && $row['quest01']!= ' ' &&
    $row['quest02']!= 'NULL' && $row['quest02']!= ' ' &&
    $row['quest03']!= 'NULL' && $row['quest03']!= ' ' &&
    $row['quest04']!= 'NULL' && $row['quest04']!= ' ' &&
    $row['quest05']!= 'NULL' && $row['quest05']!= ' ' &&
    $row['quest06']!= 'NULL' && $row['quest06']!= ' ' &&
    $row['quest07']!= 'NULL' && $row['quest07']!= ' ' &&
    $row['quest08']!= 'NULL' && $row['quest08']!= ' ' &&
    $row['quest09']!= 'NULL' && $row['quest09']!= ' ' &&
    $row['quest10']!= 'NULL' && $row['quest10']!= ' ' &&
    $row['quest11']!= 'NULL' && $row['quest11']!= ' ' &&
    $row['quest12']!= 'NULL' && $row['quest12']!= ' ' &&
    $row['quest13']!= 'NULL' && $row['quest13']!= ' ' &&
    $row['quest14']!= 'NULL' && $row['quest14']!= ' ' &&
    $row['quest15']!= 'NULL' && $row['quest15']!= ' ' &&
    $row['quest16']!= 'NULL' && $row['quest16']!= ' ' &&
    $row['quest17']!= 'NULL' && $row['quest17']!= ' ' &&
    $row['quest18']!= 'NULL' && $row['quest18']!= ' ' &&
    $row['quest19']!= 'NULL' && $row['quest19']!= ' '
) {$zachet_ok = "UPDATE `motiv` SET `zachet` = 'Зачёт' WHERE `id_motiv`=" . $_SESSION['id_motiv'];}
else {$zachet_ok = "UPDATE `motiv` SET `zachet` = 'Не зачёт' WHERE `id_motiv`=" . $_SESSION['id_motiv'];}
$res = $link->query($zachet_ok);

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
        <form method="post" action="index.php">
            <div id="button-next" style="text-align: center;">
                <input type="submit" value="На главную" class="table-form"/><br>
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