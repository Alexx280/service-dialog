<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");
if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$text=$_POST['text1'].$_POST['text2'].$_POST['text3'].$_POST['text4'].$_POST['text5'].$_POST['text6'].$_POST['text7'].$_POST['text8'].$_POST['text9'].$_POST['text0'].$_POST['text01'];
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $text. "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];


$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">
        <form method="post" action="<?php echo(substr(__FILE__, 38, 2) + 1) ?>.php" style="">
            С какими сложностями в работе с персоналом по итогам проверок вам приходится сталкиваться?<br>
            <p class="mini">
            <input id="kt1" class="checkbox" type="checkbox" name="text1" value="Трудность аргументирования сотруднику итогов проверок с низкой оценкой. <br>" />
            <label for="kt1">Трудность аргументирования сотруднику итогов проверок с низкой оценкой</label><br>
            <input id="kt2" class="checkbox" type="checkbox" name="text2" value="Сопротивление персонала. <br>" />
            <label for="kt2">Сопротивление персонала</label><br>
            <input id="kt3" class="checkbox" type="checkbox" name="text3" value="Недоверие персонала оценкам. <br>" />
            <label for="kt3">Недоверие персонала оценкам</label><br>
            <input id="kt4" class="checkbox" type="checkbox" name="text4" value="Свое собственное недоверие оценкам. <br>" />
            <label for="kt4">Свое собственное недоверие оценкам</label><br>
            <input id="kt5" class="checkbox" type="checkbox" name="text5" value="Сложность мотивировать персонал на выполнение Сервисного диалога. <br>" />
            <label for="kt5">Сложность мотивировать персонал на выполнение Сервисного диалога</label><br>
            <input id="kt6" class="checkbox" type="checkbox" name="text6" value="Отсутствие у руководителя инструмента мотивации – премирование за показатель. <br>" />
            <label for="kt6">Отсутствие у руководителя инструмента мотивации – премирование за показатель</label><br>
            <input id="kt7" class="checkbox" type="checkbox" name="text7" value="Узкая зона влияния на персонал для выполнения показателя. <br>" />
            <label for="kt7">Узкая зона влияния на персонал для выполнения показателя</label><br>
            <input id="kt8" class="checkbox" type="checkbox" name="text8" value="Отсутствие позитивных нематериальных способов мотивации персонала. <br>" />
            <label for="kt8">Отсутствие позитивных нематериальных способов мотивации персонала </label><br>
            <input id="kt9" class="checkbox" type="checkbox" name="text9" value="Негативная мотивация руководства по итогам проверок. <br>" />
            <label for="kt9">Негативная мотивация руководства по итогам проверок</label><br>
            <input id="kt10" class="checkbox" type="checkbox" name="text10" value="Противоречивые требования и неточность информации по процессу проверок. <br>" />
            <label for="kt10">Противоречивые требования и неточность информации по процессу проверок</label><br>
            <input id="kt11" class="checkbox" type="checkbox" name="text11" value="Непонимание смысла отдельных фраз Сервисного диалога. <br>" />
            <label for="kt11">Непонимание смысла отдельных фраз Сервисного диалога</label><br>
            <input id="kt12" class="checkbox" type="checkbox" name="text12" value="Не понимание связи проверок с % премиальной частью сотрудников и АУП. <br>" />
            <label for="kt12">Не понимание связи проверок с % премиальной частью сотрудников и АУП</label><br>
            <input id="kt13" class="checkbox" type="checkbox" name="text13" value="Сложно объяснить какую заработную плату получит сотрудник. <br>" />
            <label for="kt13">Сложно объяснить какую заработную плату получит сотрудник</label><br>
            <input id="kt14" class="checkbox" type="checkbox" name="text14" value="Выполнение сервисного диалога в нестандартных ситуациях: больной сотрудник, стажер и т.п. <br>" />
            <label for="kt14">Выполнение сервисного диалога в нестандартных ситуациях: больной сотрудник, стажер и т.п.</label><br>
            <input id="kt0" class="checkbox" type="checkbox" name="text0" value="Свой ответ: " />
            <label for="kt0">Свой ответ:</label><br>
            </p>
            <p><textarea rows="1" class="text" name="text01"></textarea></p><br>

            <div id="button-next1" style="text-align: center;">
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