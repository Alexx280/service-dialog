<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();
/*
if (isset ($_POST['s4']) && !isset($_POST['s1']) && !isset($_POST['s2']) && !isset($_POST['s3']) && !isset($_POST['s5'])
)
{
    $q10="UPDATE `lama` SET `quest_12` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q10="UPDATE `lama` SET `quest_12` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}
*/
$q11="UPDATE `motiv` SET `quest10` = '".$_POST['text10']."' WHERE `id_motiv`=".$_SESSION['id_motiv'];
$res = $link->query($q11);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">10. </p><br />

            <form method="post" action="11.php" style="">
                Влияет ли на оценку кассира примечание Тайного Покупателя о том, что кассир, например, не поздоровалась с предыдущим или со следующим покупателем?<br><br>

                А. Да  <br>     В. Нет  <br>     С. Не знаю  <br>    D. Не уверен(а), считаю, что влияет <br><br><br>
                <p><textarea rows="7" cols="133" name="text11"></textarea></p><br><br>

                <div style="text-align: center;">
                    <input type="submit" value="Дальше" class="table-form"/><br>
                </div>

            </form>

        <div class="strings"><p>10/10</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>