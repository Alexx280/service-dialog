<?php
session_start();
include_once 'head.tpl';
include_once("funk.php");

if (substr(__FILE__, 38, 2) + 0 < 10) {
    $chislo = "0" . strval(substr(__FILE__, 38, 2) + 0 - 1);
} else {
    $chislo = strval(substr(__FILE__, 38, 2) + 0 - 1);
}

$text=$_POST['text01'].$_POST['text02'].$_POST['text03'].$_POST['text04'].$_POST['text05'].$_POST['text06'].$_POST['text07'].$_POST['text08'].$_POST['text09'].$_POST['text10'].$_POST['text11'];

$link = connect();
$q = "UPDATE `motiv` SET `quest" . $chislo . "` = '" . $text . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">

        <p class="tq"></p> <br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Какой балл является максимальным за выполнение СД на кассе?

            <br>
            <input id="em1" class="checkbox" type="radio" name="text" value="5 баллов" />
            <label for="em1">5 баллов</label> <br>
            <input id="em2" class="checkbox" type="radio" name="text" value="8 баллов" />
            <label for="em2">8 баллов</label> <br>
            <input id="em3" class="checkbox" type="radio" name="text" value="10 баллов" />
            <label for="em3">10 баллов</label> <br>
            <input id="em4" class="checkbox" type="radio" name="text" value="Не знаю" />
            <label for="em4">Не знаю</label> <br>
            <br><br><br><br>

            <!--<p><textarea rows="7" class="text" name="text04"></textarea></p><br><br>-->

            <div id="button-next" style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
        </form>

        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>
<!--  <a href="5.php">
      <div class="knopka3 ">
          <p>Далее</p>
      </div>
  </a>-->
</html>