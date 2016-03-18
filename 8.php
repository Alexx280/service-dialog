<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();
/*
if (isset ($_POST['file3']) && !isset($_POST['file1'])
    && !isset($_POST['file2'])&& !isset($_POST['file4']) && !isset($_POST['file5']) && !isset($_POST['file6']))
{
    $q08="UPDATE `lama` SET `quest_08` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q08="UPDATE `lama` SET `quest_08` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}
*/
$q08="UPDATE `motiv` SET `quest07` = '".$_POST['text07']."' WHERE `id_motiv`=".$_SESSION['id_motiv'];
$res = $link->query($q08);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">8. </p><br />
        <form method="post" action="9.php">
            Что означает ответ «Не точно» по какому- либо пункту Сервисного Диалога?<br><br>
            <!--
            Вы не успеваете выпольнить работу в срок, как вы поступите:<br><br>
            <input id="wo1" class="checkbox" type="checkbox" name="work1" value="0" />
            <label for="wo1">Скопирую на флэшку и поработаю дома</label><br>
            <input id="wo2" class="checkbox" type="checkbox" name="work2" value="0" />
            <label for="wo2">Отправлю себе на почту и поработаю дома</label><br>
            <input id="wo3" class="checkbox" type="checkbox" name="work3" value="0" />
            <label for="wo3">Останусь на работе или приду завтра пораньше</label><br>
            <input id="wo4" class="checkbox" type="checkbox" name="work4" value="1" />
            <label for="wo4">Попрошу коллег помочь мне</label><br>
            <input id="wo5" class="checkbox" type="checkbox" name="work5" value="1" />
            <label for="wo5">Нет правильного варианта</label><br>
            -->
            А. Серьезное отклонение от стандарта обслуживания <br>
            В. Любое несоответствие фразы стандарту обслуживания <br>
            С. Не знаю <br><br><br><br><br>
            <p><textarea rows="7" cols="133" name="text08"></textarea></p><br><br>

            <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>
        <div class="strings"><p>8/10</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>