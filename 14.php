<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
if (substr(__FILE__,38,2)+0<10)
{$chislo = "0".strval(substr(__FILE__,38,2)+0-1);}
else
{$chislo = strval(substr(__FILE__,38,2)+0-1);}
$link=connect();
$q = "UPDATE `motiv` SET `quest" .$chislo. "` = '" . $_POST['text' . $chislo ] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq"> </p><br />

            <form method="post" action="15.php" style="">
                Просматриваете ли вы анкету с подробными ответами и комментариями ТП в программе?<br><br>

                А. Да, всегда<br>
                В. Только если низкие оценки<br>
                С. Нет<br>
                D. Не знаю, как просматривать анкеты <br>
                <br><br><br>
                <p><textarea rows="7" cols="133" name="text14"></textarea></p><br><br>

                <div style="text-align: center;">
                    <input type="submit" value="Дальше" class="table-form"/><br>
                </div>

            </form>

        <div class="strings"><p>14/18</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>