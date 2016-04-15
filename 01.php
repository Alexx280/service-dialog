<?php
session_start();
include_once "funk.php";
include_once "head.tpl";
if ($_SESSION['id_motiv'] > 1) {
    echo('
   <!DOCTYPE HTML>
<html>
<div id="centr-q">
    <div id="quest">
        <p class="tq"></p><br>
        Что такое Стандарт обслуживания на кассе?
        <form action="0' . (substr(__FILE__, 38, 2) + 1) . '.php" method="post">
             <input id="q01_text1" class="checkbox" type="radio" name="q01_text" value="Документ, описывающий основные правила и требования взаимодействия с покупателем" />
                <label for="q01_text1">Документ, описывающий основные правила и требования взаимодействия с покупателем</label> <br>
                <input id="q01_text2" class="checkbox" type="radio" name="q01_text" value="Документ, рекомендующий каким образом должен осуществляться процесс обслуживания" />
                <label for="q01_text2">Документ, рекомендующий каким образом должен осуществляться процесс обслуживания</label> <br>
                <input id="q01_text3" class="checkbox" type="radio" name="q01_text" value="Документ, описывающий обязательные и рекомендательные характеристики процесса обслуживания покупателей" />
                <label for="q01_text3">Документ, описывающий обязательные и рекомендательные характеристики процесса обслуживания покупателей</label> <br>
                <input id="q01_text4" class="checkbox" type="radio" name="q01_text" value="Документ, описывающий процесс взаимодействия с покупателями и при необходимости в конкретной ситуации может быть изменен" />
                <label for="q01_text4">Документ, описывающий процесс взаимодействия с покупателями и при необходимости в конкретной ситуации может быть изменен</label> <br>

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
        </form>
        <div class="strings"><p>' . (substr(__FILE__, 38, 2)) . '<?php  ?>/18</p></div>
    </div>
</div>

</html>

    ');
}
else if ($_SESSION['id_motiv'] == NULL) {

    echo('
   <!DOCTYPE HTML>
<html>
<div id="centr-q">
    <div id="quest">
        <p class="tq">Ой, не хорошо так делать! Введите информацию о себе.</p>
        <br><br><br>
        <form action="test.php" method="post">
            <div style="text-align: center;"><input type="submit" value="Ввести информацию" class="table-form"/><br></div>
        </form>
    </div>
</div>

</html>

    ');
} else {
};
?>

