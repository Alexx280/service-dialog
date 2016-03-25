<?php
include_once 'funk.php';
include_once 'head_edu.tpl';

?>
<!DOCTYPE HTML>


<html>

<head>
    <link rel='stylesheet' type='text/css' href='animate.css'/>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>

</head>

<div id="edu" class="tada"><br><br>

    <p class="animated flipInX te "> Сервисный диалог на кассе </p>

    <p class="animated flipInX te "> в торговой розничной сети ГК Лама </p>

    <div class="butt4">
        <a href="test.php">
            <button type="button" class="btn btn-success btn-lg btn3d" style="width: 135px"><span
                    class="glyphicon glyphicon-ok"></span> Тест
            </button>
        </a>
    </div>
    <!--
    <div class="butt2">
        <a href="curs_edu19.php">
            <button type="button" class="btn btn-success btn-lg btn3d">Инструкции</button>
        </a>
    </div>

    <div class="butt4">
        <a href="curs_edu19.php">
            <button type="button" class="btn btn-info btn-lg btn3d "><span class="glyphicon glyphicon-question-sign"></span> Info</button>
        </a>
    </div>
    test
    <img src="pic/arrow_top.png" id="arrow">
    <div id="comment0"> Рекомендуем </div>-->

</div>

<script>
    $(document).ready(function () {
        $('.butt1').hover(function () {
            $('img').animate({opacity: 1}, 500)
        }, function () {
            $('img').animate({opacity: 0}, 1000)
        });
        $('.butt1').hover(function () {
            $('#comment0').animate({opacity: 1}, 500)
        }, function () {
            $('#comment0').animate({opacity: 0}, 1000)
        })
    });

</script>


</html>