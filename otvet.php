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
<form method="post" action="otchet.php">

    <input type="submit" value="Обратно" class="table-form"/><br>

</form>
</body>
</html>