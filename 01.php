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
        Что такое Стандарт обслуживания на кассе? В чем его цель?
        <form action="0' . (substr(__FILE__, 38, 2) + 1) . '.php" method="post">
            <br><br><br><br><br><br><br><br>

            <p><textarea rows="7" class="text" name="text01"></textarea></p><br><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
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

