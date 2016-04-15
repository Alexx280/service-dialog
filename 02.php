<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";

if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}

if (isset ($_POST['q01_text'])){$text = $_POST['q01_text'];}else{};
/*if (isset ($_POST['q01_text2'])){$text = $_POST['q01_text2'];}else{};
if (isset ($_POST['q01_text3'])){$text = $_POST['q01_text3'];}else{};
if (isset ($_POST['q01_text4'])){$text = $_POST['q01_text4'];}else{};
*/
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['q01_text'] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);



/*Проверка последовательности анкетирования*/
$login = "SELECT `number_site` FROM `motiv` WHERE id_motiv= '" . $_SESSION['id_motiv'] . "'";
$res = $link->query($login);
$row = $res->fetch_assoc();
echo ($row['number_site']);
echo ('<br>');
$number = $row['number_site'];
/*echo ($number+1);
echo ('<br>');
echo (substr(__FILE__, 38, 2) + 0-1);
echo ('<br>');*/
$number=$number+1;
if ($number == substr(__FILE__, 38, 2) + 0-1){
    $q = "UPDATE `motiv` SET `number_site` = '" . $number . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
    $res = $link->query($q);
    //echo ($number);
}
else{
    echo ('Вы не верно открыли страницу, отвечайте с начала и до конца');

}
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">
        <p class="tq"></p><br>

        <form method="post" action="  <?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            В чем цель Стандарта обслуживания? <br>
            <input id="q02_text1" class="checkbox" type="checkbox" name="text1" value="Обеспечивает конкурентное преимущество компании. <br>" />
            <label for="q02_text1">Обеспечивает конкурентное преимущество компании </label> <br>
            <input id="q02_text2" class="checkbox" type="checkbox" name="text2" value="Гарантирует «фирменное» качество обслуживания в магазинах. <br>" />
            <label for="q02_text2">Гарантирует «фирменное» качество обслуживания в магазинах </label> <br>
            <input id="q02_text3" class="checkbox" type="checkbox" name="text3" value="Описывает необходимые действия персонала, при возникновении различных ситуаций в процессе обслуживания. <br>" />
            <label for="q02_text3">Описывает необходимые действия персонала, при возникновении различных ситуаций в процессе обслуживания </label> <br>
            <input id="q02_text4" class="checkbox" type="checkbox" name="text4" value="Оптимизирует рабочий процесс. <br>" />
            <label for="q02_text4">Оптимизирует рабочий процесс.</label> <br>

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>

        </form>
        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
</html>