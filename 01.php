<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";
?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest">
        <p class="tq"></p><br>
        Что такое Стандарт обслуживания на кассе? В чем его цель?
        <form action="<?php echo "0" . (substr(__FILE__, 38, 2) + 1) ?>.php" method="post">
            <br><br><br><br><br><br><br><br>

            <p><textarea rows="7" class="text" name="text01"></textarea></p><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
        </form>
        <div class="strings"><p><?php echo(substr(__FILE__, 38, 2)) ?>/18</p></div>
    </div>
</div>

</html>