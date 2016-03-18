<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");
$link=connect();

/*if (isset ($_POST['kt3']) && !isset($_POST['kt1'])
    && !isset($_POST['kt2'])&& !isset($_POST['kt4'])&& !isset($_POST['kt5']))
{
    $q07="UPDATE `lama` SET `quest_07` = '1' WHERE `lama_id`=".$_SESSION['lama_id'];
}
else
{
    $q07="UPDATE `lama` SET `quest_07` = '0' WHERE `lama_id`=".$_SESSION['lama_id'];
}
*/
$q07="UPDATE `motiv` SET `quest06` = '".$_POST['text06']."' WHERE `id_motiv`=".$_SESSION['id_motiv'];
$res = $link->query($q07);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq">7. Нарушение СД.</p><br />
        <form method="post" action="8.php">
            Что является нарушением/невыполнением Сервисного Диалога (при каких условиях ставится ответ «Нет» по какому-либо пункту)?<br><br>
            А. Когда все слова внутри фразы сказаны, но порядок слов изменен <br>
            В. Когда изменена последовательность фраз в Сервисном диалоге <br>
            С. Когда фраза не выполнена <br>
            D. Не знаю <br>
            Е. Ответы В и С <br>
            <br>
            <!--
            Сотрудник из другого отдела отдела попросил предать ему файл размером 25Мб с конфиденциальной информацией, как вы поступите:<br /><br>
            <input id="fi1" class="checkbox" type="checkbox" name="file1" value="0" />
            <label for="fi1">Создам папку на сервере в папке \\intel2\Общая\"моя папка", и скопирую туда файл </label><br>
            <input id="fi2" class="checkbox" type="checkbox" name="file2" value="0" />
            <label for="fi2">Отправлю файл по почте</label><br>
            <input id="fi3" class="checkbox" type="checkbox" name="file3" value="0" />
            <label for="fi3">Поставлю пароль на файл, найду его папку в папке "Общая" и скопирую туда файл</label><br>
            <input id="fi4" class="checkbox" type="checkbox" name="file4" value="1" />
            <label for="fi4">Создам папку на своём компьютере, открою общий доступ и скопирую туда файл</label><br>
            <input id="fi5" class="checkbox" type="checkbox" name="file5" value="1" />
            <label for="fi5">Выложу на сайт HDD.tomsk.ru</label><br>
            <input id="fi6" class="checkbox" type="checkbox" name="file6" value="1" />
            <label for="fi6">Нет правильного варианта</label><br>
            -->
            <p><textarea rows="7" cols="133" name="text07"></textarea></p><br><br>


            <div style="text-align: center;"> <input type="submit" value="Дальше" class="table-form"/></br></div>

        </form>
        <div class="strings"><p>7/10</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>