<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");

if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}
$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $_POST['text' . $chislo] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"> Какие пункты Стандарта обслуживания влияют на оценку по итогам проверки? </p><br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            <p class="mini">
                1. Посмотрите на покупателя и улыбнитесь<br>
                2. Поздоровайтесь: «Здравствуйте!»<br>
                3. Спросите у покупателя: «Вам пакет большой или маленький?»<br>
                4. Спросите у покупателя: «У вас есть бонусная карта?» * Данный пункт для формата «Абрикос», «Абрикос+»,
                «ФУД-СИТИ»<br>
                5. Аккуратно и быстро пробейте весь товар<br>
                6. Проследите, чтобы весь товар из корзины или тележки был выложен на кассовую ленту.<br>
                7. Аккуратно (не бросая) складывайте пробитый Товар в пакет в соответствии с правилами товарного
                соседства, упакуйте в отдельные полиэтиленовые мешки Товар, который может загрязнить или испортить
                другие Товары (молочная, рыбная, мясная продукция, бытовая химия).<br>
                8. Назовите стоимость покупки<br>
                9. При желании покупателя оплатить покупку бонусной картой, проведите необходимую операцию – «расчет
                бонусами»<br>
                10. Отбейте чек для покупателя и для магазина, положите чек на место для подписания и скажите
                Покупателю: «Распишитесь, пожалуйста». Проследите, чтобы подпись была поставлена в нужном месте
                чека.<br>
                11. Положите чек для Покупателя на монетницу, а чек для магазина с подписью Покупателя уберите в
                кассу.<br>
                12. При оплате наличными: возьмите деньги, назовите сумму денег, полученную от Покупателя: «Ваши ….» , и
                положите их на виду у Покупателя.<br>
                13. Отбейте чек.<br>
                14. Назовите сумму сдачи: «Ваша сдача…» и положите ее (купюры и мелочь одновременно) поверх чека на
                монетницу<br>
                15. Положите деньги, полученные от Покупателя, в кассу<br>
                16. При безналичном расчете: проведите необходимую операцию – «безналичный расчет».<br>
                17. Отбейте чек для покупателя и для магазина, положите чек на место для подписания и скажите
                Покупателю: «Распишитесь, пожалуйста». Сверьте подпись на карте и чеке. Распишитесь в чеке покупателя и
                положите чек вместе с картой на монетницу, а второй чек с подписью Покупателя положите в кассу.<br>
                18. В том случае, если для подтверждения операции необходимо ввести пин-код, то предоставьте терминал
                для ввода пин-кода и скажите покупателю «Введите пин-код, пожалуйста». После этого один чек вместе с
                картой положите на монетницу, а второй чек положите в кассу.<br>
                19. Посмотрите на Покупателя, улыбнитесь и поблагодарите его: «Спасибо за покупку, приходите к нам еще!»<br>
            </p>

            <p><textarea rows="1" cols="133" name="text03"></textarea></p><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>
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