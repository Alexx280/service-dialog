<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";

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
    <p class="tq"> </p><br>
    <form method="post" action="  <?php echo "0".strval(substr(__FILE__,38,2)+1) ?>.php">
        Какова цель проверок Тайными покупателями? <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--
        <input id="em1" class="checkbox" type="checkbox" name="email1" value="0" />
        <label for="em1">Пользоваться в личных целях вне рабочее время</label> <br>
        <input id="em2" class="checkbox" type="checkbox" name="email2" value="0" />
        <label for="em2">Отправлять поздравительную информацию сразу всем сотрудникам</label> <br>
        <input id="em3" class="checkbox" type="checkbox" name="email3" value="0" />
        <label for="em3">Отправка файлов-программ, а также аудио- и видео-роликов</label> <br>
        <input id="em4" class="checkbox" type="checkbox" name="email4" value="0" />
        <label for="em4">Использовать электронную почту коллег от своего имени</label> <br>
                <!--<input id="em5" class="checkbox" type="checkbox" name="email5" value="1" />
                <label for="em5">Рассылать объявления поздравительного характера в пределах отдела</label> <br>-->
        <!--<input id="em6" class="checkbox" type="checkbox" name="email6" value="1" />
        <label for="em6">Нет правильного варианта</label> <br>-->
        <p><textarea rows="7" cols="133" name="text02"></textarea></p><br><br>


        <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>

         </form>
    <div class="strings"><p>2/18</p></div>
</div>
</div>
<!--<a href="3.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>