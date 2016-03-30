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

        <p class="tq"></p> <br/>

        <form method="post" action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php">
            Какой балл является максимальным за выполнение СД по новой системе оценки?

            <br>
            А. 5 баллов <br> В. 8 баллов <br> С. 10 баллов <br> D. Не знаю <br><br><br><br><br>

            <p><textarea rows="7" class="text" name="text04"></textarea></p><br><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
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