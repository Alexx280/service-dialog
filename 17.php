<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$text=$_POST['text1'].$_POST['text2'].$_POST['text3'].$_POST['text4'];
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
            Какие вопросы или сложности в работе программы ТП у вас возникают?<br><br>
            <input id="kt1" class="checkbox" type="checkbox" name="text1" value="Нет времени вникать в программу. " />
            <label for="kt1">Нет времени вникать в программу</label><br>
            <input id="kt2" class="checkbox" type="checkbox" name="text2" value="Не понятно, как и где просматривать подробную информацию по итогам проверки. " />
            <label for="kt2">Не понятно, как и где просматривать подробную информацию по итогам проверки</label><br>
            <input id="kt3" class="checkbox" type="checkbox" name="text3" value="Не хватает каких-либо функций в программе. " />
            <label for="kt3">Не хватает каких-либо функций в программе</label><br>
            <input id="kt4" class="checkbox" type="checkbox" name="text4" value="Не достаточно объяснений и комментарий от покупателей. " />
            <label for="kt4">Не достаточно объяснений и комментарий от покупателей</label><br>
            <input id="kt5" class="checkbox" type="checkbox" name="text5" value="Не понятны инструкции по вопросам. " />
            <label for="kt5">Не понятны инструкции по вопросам</label><br>
            <input id="kt6" class="checkbox" type="checkbox" name="text6" value="Программа не удобна в использовании. " />
            <label for="kt6">Программа не удобна в использовании</label><br>
            <input id="kt7" class="checkbox" type="checkbox" name="text7" value="Сложность с правами доступа к программе ответственных лиц. " />
            <label for="kt7">Сложность с правами доступа к программе ответственных лиц</label><br>
            <input id="kt8" class="checkbox" type="checkbox" name="text8" value="Отсутствие нужной информации: отчеты, вопросы и т.п. " />
            <label for="kt8">Отсутствие нужной информации: отчеты, вопросы и т.п.</label><br>
            <input id="kt9" class="checkbox" type="checkbox" name="text9" value="Все понятно, вопросов нет. " />
            <label for="kt9">Все понятно, вопросов нет</label><br>
            <input id="kt0" class="checkbox" type="checkbox" name="text0" value="Свой ответ: " />
            <label for="kt0">Свой ответ:</label><br>
            <p><textarea rows="2" class="text" name="text01"></textarea></p><br><br>

            <div id="button-next" style="text-align: center;">
                <input type="submit" value="Дальше" class="table-form"/><br>
            </div>

        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2) + 1) ?>/18</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>