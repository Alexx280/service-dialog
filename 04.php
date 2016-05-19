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
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $text . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"> </p><br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Какие пункты Стандарта обслуживания влияют на оценку по итогам проверки?
            <p class="mini">
                <input id="em1" class="checkbox" type="checkbox" name="text01" value="1.Посмотрите на покупателя и улыбнитесь. <br>" />
                <label for="em1">1.	Посмотрите на покупателя и улыбнитесь</label> <br>
                <input id="em2" class="checkbox" type="checkbox" name="text02" value="2.Поздоровайтесь: «Здравствуйте!»<br>" />
                <label for="em2">2.	Поздоровайтесь: «Здравствуйте!»</label> <br>
                <input id="em3" class="checkbox" type="checkbox" name="text03" value="3.Спросите у покупателя: «Вам пакет большой или маленький?»<br>" />
                <label for="em3">3.	Спросите у покупателя: «Вам пакет большой или маленький?»</label> <br>
                <input id="em4" class="checkbox" type="checkbox" name="text04" value="4.Спросите у покупателя: «У вас есть бонусная карта?»<br>" />
                <label for="em4">4.	Спросите у покупателя: «У вас есть бонусная карта?» </label> <br>
                <input id="em5" class="checkbox" type="checkbox" name="text05" value="5.Аккуратно (не бросая) складывайте пробитый Товар в пакет в соответствии с правилами товарного соседства. <br>" />
                <label for="em5">5.	Аккуратно (не бросая) складывайте пробитый Товар в пакет в соответствии с правилами товарного соседства </label> <br>
                <input id="em6" class="checkbox" type="checkbox" name="text06" value="6.Назовите стоимость покупки<br>" />
                <label for="em6">6.	Назовите стоимость покупки </label> <br>
                <input id="em7" class="checkbox" type="checkbox" name="text07" value="7.Назовите сумму денег, полученную от Покупателя: «Ваши ….» , и положите их на виду у  Покупателя<br>" />
                <label for="em7">7.	Назовите сумму денег, полученную от Покупателя: «Ваши ….» , и положите их на виду у  Покупателя </label> <br>
                <input id="em8" class="checkbox" type="checkbox" name="text08" value="8.Отбейте чек <br>" />
                <label for="em8">8.	Отбейте чек </label> <br>
                <input id="em9" class="checkbox" type="checkbox" name="text09" value="9.Назовите сумму сдачи: «Ваша сдача…» и положите ее (купюры и мелочь одновременно) поверх чека на монетницу<br>" />
                <label for="em9">9.	Назовите сумму сдачи: «Ваша сдача…» и положите ее (купюры и мелочь одновременно) поверх чека на монетницу </label> <br>
                <input id="em0" class="checkbox" type="checkbox" name="text10" value="10.При безналичном расчете: попросите Покупателя «Распишитесь, пожалуйста» либо «Введите пин-код, пожалуйста»<br>" />
                <label for="em0">10. При безналичном расчете: попросите Покупателя «Распишитесь, пожалуйста» либо «Введите пин-код, пожалуйста». </label> <br>
                <input id="em" class="checkbox" type="checkbox" name="text11" value="11.Посмотрите на  Покупателя, улыбнитесь  и поблагодарите его: «Спасибо за покупку, приходите к нам еще!»<br>" />
                <label for="em">11.	Посмотрите на  Покупателя, улыбнитесь  и поблагодарите его: «Спасибо за покупку, приходите к нам еще!» </label> <br>

            </p>

            <!--<p><textarea rows="1" class="text" name="text03"></textarea></p><br>-->

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>
        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
<!--<a href="4.php">
    <div class="knopka3 ">
        <p>Далее</p>
    </div>
</a>-->
</html>