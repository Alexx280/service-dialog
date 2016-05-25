<?php
session_start();
include_once 'head1.tpl';
include_once("funk.php");
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/
$link = connect();
/*if ($_SESSION['lama_id'] != '') {
unset ($_SESSION['lama_id']);}
else {};
/*Активация сессии с указанными именем и фамилией*/
//$login = "SELECT id_motiv FROM `motiv` WHERE family= '" . $_POST['family'] . "' AND name = '" . $_POST['name'] . "'";
$login = "SELECT id_motiv FROM `motiv` WHERE family= '" . $_POST['family'] . "' AND name = '" . $_POST['name'] . "' AND code = '" . $_POST['code'] . "'";
$res = $link->query($login);
$row = $res->fetch_assoc();
$_SESSION['id_motiv'] = $row['id_motiv'];
/*Конец Активация сессии с указанными именем и фамилией*/
/*Если имя есть в базе*/
if (isset($_SESSION['id_motiv'])) {
    /*вводим информацию предоставленную пользователем, отчество...*/

    $income = "UPDATE motiv SET father_name = '" . $_POST['father_name'] . "',
                                     `job` = '" . $_POST['job'] . "',
                                   `place` = '" . $_POST['place'] . "',
                               `date_test` = '20" . date('y-m-d') . "',
                               `first_day` = '" . $_POST['first_day'] . "'
                                                                        WHERE id_motiv = " . $_SESSION['id_motiv'];

    $res = $link->query($income);

    echo('
            <div id="centr" style="margin-left: -360px; width:700px">
                <p class="tc"> Добрый день, ' . $_POST['name'] . '  ' . $_POST['father_name'] . ' .<br>
                Предлагаем вам ответить на 18 вопросов.<br>
                Внимательно прочитайте вопросы и ответы.<br>
                Вернуться на предыдущий вопрос будет невозможно.<br>
                Ответов может быть несколько или один.<br>
                На каждый вопроc выделено по 5 минут<br>
                <br><br></p>
                <form method="post" action="01.php">
                    <input type="submit" value="Вперёд" class="table-form"/>
                </form><br>
            </div>
        ');
} /*Если имени нет в базе*/
else {
    echo('

            <div id="centr" style="margin-left: -360px; width:700px">
                <p class="tc"> Вы ввели не корректную информацию </br></br></p>
                <form method="post" action="test.php">
                    <input type="submit" value="Ещё раз" class="table-form"/>
                </form>
            </div>

    ');
}
?>
