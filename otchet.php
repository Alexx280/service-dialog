<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            border-collapse: collapse; /* Убираем двойные линии между ячейками */
            width: 600px; /* Ширина таблицы */
        }

        th {
            background: #fc0;
        }
    </style>

</head>
<body>

<form method="post" action="otchet.php">
    <b>Период проведения опроса</b><br>

    <select name="place" style="width: 244px">
        <option value="">Выберите из списка</option>
        <option value="2016-03%">2016 Март</option>
        <option value="2016-04%">2016 Апрель</option>
        <option value="2016-05%">2016 Май</option>
        <option value="2016-06%">2016 Июнь</option>
        <option value="2016-07%">2016 Июль</option>


    </select><br><br>
    <input type="submit" value="Показать" class="table-form"/><br>

</form>
<br>
<script>debugger;</script>
<?php
include_once("funk.php");
if ($_POST['place'] === '2016-05%') {
    $data = 'Май 2016г.';
} else if ($_POST['place'] === '2016-06%') {
    $data = 'Июнь 2016г.';
} else if ($_POST['place'] === '2016-07%') {
    $data = 'Июль 2016г.';
} else if ($_POST['place'] === '2016-03%') {
    $data = 'Март 2016г.';
} else if ($_POST['place'] === '2016-04%') {
    $data = 'Апрель 2016г.';
} else {
};

//echo ('<b>Места инструктирования сотрудников за  '.$data.' </b><br>');
$names[0] = "Офис на ул.Кулагина";
$names[1] = "ТЦ Мармелайт";
$names[2] = "Офис на ул.Ленина";
$names[3] = "ТЦ Мирамикс";
function print_table($name_place)
{
    echo('<table border="2"><tr ><th colspan="3">' . $name_place . '</th></tr>');

    $link = connect();
    //$login= "SELECT * FROM `lama` WHERE date_test LIKE '".$_POST['place']."' AND `place` = '".$name_place."'";
    $login = "SELECT * FROM `motiv` WHERE date_test LIKE '" . $_POST['place'] . "'";
    $res = $link->query($login);
    $i = 1;
    while ($row = $res->fetch_assoc()) {
        $family = $row['family'];
        $name_user = $row['name'];
        $father_name_user = $row['father_name'];
        $date_test = $row['date_test'];
        $job = $row['job'];
        $first_day = $row['first_day'];
        echo('<tr>');
        echo('<td>' . $i . ' <br> </td>');
        $i = $i + 1;
        echo('<td>' . $family . ' ' . $name_user . ' ' . $father_name_user . ' <br> </td>');
        if ($job) {
            echo('<td>' . $job . ', работает с ' . $first_day . '<br> </td>');
        } else {
            echo('<td> Опрос не проводился <br> </td>');
        }
        echo('</tr>');
    };

    echo('</table><br>');
}

// $i=0;
// while ($i <4 ) {
//print_table($names[$i]);
print_table($data);
//    $i=$i+1;
// }
?>

<form method="post" action="otchet.php">
    Введите Фамилию и Имя сотрудник для просмотра его ответов: <br>
    Фамилия: <input type="text" name="family1" size="20"/><br>
    Имя: <input type="text" name="name1" size="26"/><br>

    <div><input type="submit" value="Показать ответы" class="table-form"/><br></div>
</form>
<?php
function print_otvety($family1, $name1)
{
    echo('<table border="2"  ><tr ><th colspan="2">' . $family1 . ' ' . $name1 . '</th></tr>');

    $link = connect();
    //$login= "SELECT * FROM `lama` WHERE date_test LIKE '".$_POST['place']."' AND `place` = '".$name_place."'";
    $login = "SELECT * FROM `motiv` WHERE family = '" . $_POST['family1'] . "'";
    //$login= "SELECT * FROM `motiv` WHERE family = '".$_POST['family1']."' AND name = ".$_POST['name1']."'";
    $res = $link->query($login);
    $i = 1;
    while ($row = $res->fetch_assoc()) {
        while ($i < 10) {
            echo('<tr>');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td>' . $row['quest0' . $i . ''] . '<br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
        while ($i > 9 && $i < 19) {
            echo('<tr>');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td>' . $row['quest' . $i . ''] . '<br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
    };
    echo('</table><br>');
}

print_otvety($_POST['family1'], $_POST['name1']);

echo $row['quest01']
?>
</body>
</html>

