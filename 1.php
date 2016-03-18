<?php
session_start();
include_once 'head.tpl';
include_once "funk.php";
?>
<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq"> 1. Что такое Стандарт обслуживания на кассе? В чем его цель?</p><br>

        <form action="2.php" method="post">
            <br><br>
            <p><textarea rows="7" cols="133" name="text01"></textarea></p><br><br><br>

            <br><br><br><br><br><br>
            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
        </form>

        <div class="strings"><p>1/19</p></div>

    </div>
</div>
</html>