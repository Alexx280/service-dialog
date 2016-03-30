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

        <p class="tq"></p><br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Покупатель первым сказал, что у него есть свой пакет, нужно ли продавцу предлагать пакет покупателю?<br><br>
            <!--
            Укажите верные утверждения:<br /><br />
            <input id="kt1" class="checkbox" type="checkbox" name="kt1" value="0" />
            <label for="kt1">К коммерческой тайне относится вся информация в организации</label><br>
            <input id="kt2" class="checkbox" type="checkbox" name="kt2" value="0" />
            <label for="kt2">Коммерческая тайна содержится только в финансовых и юридических документах</label><br>
            <input id="kt3" class="checkbox" type="checkbox" name="kt3" value="0" />
            <label for="kt3">Коммерческая тайна это различная информация позволяющая получить доход</label><br>
            <input id="kt4" class="checkbox" type="checkbox" name="kt4" value="1" />
            <label for="kt4">Я не буду работать с коммерческой тайной</label><br>
            <input id="kt5" class="checkbox" type="checkbox" name="kt5" value="1" />
            <label for="kt5">Нет правильного варианта</label><br>
            -->
            А. Да <br> В. Нет <br> С. Не знаю <br> D. Я требую выполнения
            <br><br><br>

            <p><textarea rows="7" class="text" name="text06"></textarea></p><br><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/></br></div>

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