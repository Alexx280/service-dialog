<?php
session_start();
include_once 'head1.tpl';
include_once ("funk.php");
$link=connect();
if ($_SESSION['lama_id'] != '') {
unset ($_SESSION['lama_id']);}
else {};
/*Активация сессии с указанными именем и фамилией*/
$login= "SELECT id_motiv FROM `motiv` WHERE family= '".$_POST['family']."' AND name = '".$_POST['name']."'";
$res = $link->query($login) ;
$row = $res->fetch_assoc();
$_SESSION['id_motiv'] = $row['id_motiv'];
/*Конец Активация сессии с указанными именем и фамилией*/
/*Если имя есть в базе*/
if (isset($_SESSION['id_motiv'])){
    /*вводим информацию предоставленную пользователем, отчество...*/
    echo ("20".date('y-m-d'));
    $income= "UPDATE motiv SET father_name = '". $_POST['father_name'] ."',
                                     `job` = '".$_POST['job']."',
                               `date_test` = '20".date('y-m-d')."',
                               `first_day` = '".$_POST['first_day']."'
                                                                        WHERE id_motiv = ".$_SESSION['id_motiv'];

       /*$income= "UPDATE `lama` SET `father_name` = '".$_POST['father_name']."',
                                     `pasp_n` = '".$_POST['pasp_n']."',
                                     `pasp_s` = '".$_POST['pasp_s']."',
                                    `factory` = '".$_POST['factory']."',
                                        `job` = '".$_POST['job']."',
                                      `place` = '".$_POST['place']."',
                                  `date_test` = '".date('y-m-d')."',
                                       `boss` = '".$_POST['boss']."'
                                                                    WHERE `lama_id`=".$_SESSION['lama_id'];*/
    $res = $link->query($income) ;

    echo ('
        <div id="centr-w">
            <div id="centr">
                <p class="tc"> Добрый день, '.$_POST['name'].'  '.$_POST['father_name'].' .<br>
                Предлагаем вам ответить на 18 вопросов.<br>
                Вернуться на предыдущитй вопрос будет невозможно.<br>
                На каждый вопроc выделено по 2 минуты<br>
                <br><br></p>
                <form method="post" action="01.php">
                    <input type="submit" value="Вперёд" class="table-form"/>
                </form><br>
                <form method="post" action="curs_edu19.php"></p>
                    <input type="submit" value="Почитать инструкции" class="table-form" />
                </form>
            </div>
        </div>
        ');
}
/*Если имени нет в базе*/
else {echo('
        <div id="centr-w" >
            <div id="centr" >
                <p class="tc"> Вы ввели не корректную информацию </br></br></p>
                <form method="post" action="test.php">
                    <input type="submit" value="Ещё раз" class="table-form"/>
                </form>
            </div>
        </div>
    ');
}
?>
