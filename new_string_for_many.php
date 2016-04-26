﻿<?php
include_once 'head1.tpl';
//include_once 'mdb.php';
include_once 'funk.php';
$login = "";

$link = connect();
/*внесение пользователей в базу*/

if ($_POST['parol-na'] == '321') {
    $login = "INSERT INTO `motiv` (`family`, `name`,`code`)
              VALUES ('" . $_POST['family'] . "','" . $_POST['name'] . "','" . rand(1000, 9999) . "')";
    $login01 = "INSERT INTO `motiv` (`family`, `name`,`code`)
              VALUES ('" . $_POST['family01'] . "','" . $_POST['name01'] . "','" . rand(1000, 9999) . "')";
    $login02 = "INSERT INTO `motiv` (`family`, `name`,`code`)
              VALUES ('" . $_POST['family02'] . "','" . $_POST['name02'] . "','" . rand(1000, 9999) . "')";
    /*$login = "INSERT INTO `lama` (`family`, `name`,`code`)
        VALUES ('" . $_POST['family'] . "','" . $_POST['name'] . "','" . rand(1000, 9999) . "')";*/

    if ($_POST['family'] != '') {
        $res = $link->query($login);
    } else {
    };
if ($_POST['family01'] != '') {
        $res = $link->query($login01);
    } else {
    };
if ($_POST['family02'] != '') {
        $res = $link->query($login02);
    } else {
    };
} else {
};
/*конец внесение пользователей в базу*/
?>
<script src="function.js" type="text/javascript"></script>
<div id='centr-w'>
    <div id='centr'>
        <form method="post" action="#">
            Фамилия и Имя<br>
            №1 <input type="text" id="fa" name="family" size="30" required="required">
            <input type="text" id="na" name="name" size="30" required="required"><br>
            <?php
            if ($_POST['family'] != '') {
                $input = "SELECT * FROM `motiv` WHERE `family` = '" . $_POST['family'] . "'";
                $res = $link->query($input);
                while ($row = $res->fetch_assoc()) {
                    foreach ($row as $key => $val) {
                        if ($key == 'family' || $key == 'name' || $key == 'zachet' || $key == 'code') {
                            echo ("$val\n");
                        }
                    }
                }
            } else { };
            ?>
            <br>
            №2 <input type="text" id="fa" name="family01" size="30" >
            <input type="text" id="na" name="name01" size="30" ><br>
            <?php
            if ($_POST['family01'] != '') {
                $input = "SELECT * FROM `motiv` WHERE `family` = '" . $_POST['family01'] . "'";
                $res = $link->query($input);
                while ($row = $res->fetch_assoc()) {
                    foreach ($row as $key => $val) {
                        if ($key == 'family' || $key == 'name' || $key == 'zachet' || $key == 'code') {
                            echo ("$val\n");
                        }
                    }
                }
            } else {};
            ?>
            <br>
            №3 <input type="text" id="fa" name="family02" size="30" >
            <input type="text" id="na" name="name02" size="30" ><br>
            <?php
            if ($_POST['family02'] != '') {
                $input = "SELECT * FROM `motiv` WHERE `family` = '" . $_POST['family02'] . "'";
                $res = $link->query($input);
                while ($row = $res->fetch_assoc()) {
                    foreach ($row as $key => $val) {
                        if ($key == 'family' || $key == 'name' || $key == 'zachet' || $key == 'code') {
                            echo ("$val\n");
                        }
                    }
                }
            } else {};
            ?>
            <br>
            <input type="password" id="na" name="parol-na" size="10" required="required"><br>

            <br>
            <input type="submit" value="Внести в базу" class="table-form"/>

        </form>
        <br>
        <form method="post" action="test.php">
            <input type="submit" value="Тестирование" class="table-form"/>
            <br>
            <br>
        </form>
        <form method="post" action="otchet.php">

            <input type="submit" value="Отчёт" class="table-form"/>
            <br>
            <br>
        </form>
        <!--<form onclick="setupMessageButton('Добавлено:', '$input')" >
            <input type="button" class="table-form" value="Добавленные сегодня" />
            </br>
            </br>
        </form>-->
        <form method="post" action="#">
            Фамилия:<br>
            <input type="text" id="da" name="fam" size="10" required="required"><br><br>
            <input type="password" id="day" name="parol" size="10" required="required"><br>
            <br>
            <input type="submit" value="Проверить в базе" class="table-form"/>
        </form>
        <br>
<?php

if ($_POST['parol'] == 'gigabite8srx') {
    echo ("Имя и код доступа для прохождения анкетирования:<br>");
    $input = "SELECT * FROM `motiv` WHERE `family` = '" . $_POST['fam'] . "'";
    $res = $link->query($input);
    while ($row = $res->fetch_assoc()) {
        //var_dump($row['family'],$row['name']);
        foreach ($row as $key => $val) {
            if ($key == 'family' || $key == 'name' || $key == 'zachet' || $key == 'code') {
                echo ("$val\n");
            }
        }
    }
} else {
};

?>
    </div>

</div>
