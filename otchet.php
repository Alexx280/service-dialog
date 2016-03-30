<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css">
        table {
            border-collapse: collapse; /* Убираем двойные линии между ячейками */
            width: 1000px; /* Ширина таблицы */
        }

        th {
            background: #fc0;

        }
        tr:nth-child(2n) {
            background: lightgreen; /* Цвет фона */
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
        echo('<td width="300">' . $family . ' ' . $name_user . ' ' . $father_name_user . ' <br> </td>');
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
    $question = array(
        "Что такое Стандарт обслуживания на кассе? В чем его цель?",
        "Какова цель проверок Тайными покупателями?",
        "Какие пункты Стандарта обслуживания влияют на оценку по итогам проверки?",
        "Какой балл является максимальным за выполнение СД по новой системе оценки?",
        "Каким образом рассчитывается оценка по итогам проверки?",
        "Покупатель первым сказал, что у него есть свой пакет, нужно ли продавцу предлагать пакет покупателю?",
        "Что является нарушением/невыполнением Сервисного Диалога (при каких условиях ставится ответ «Нет» по какому-либо пункту)?",
        "Что означает ответ «Не точно» по какому- либо пункту Сервисного Диалога?",
        "Что означает ответ «-» в анкете?",
        "Является ли нарушением, если кассир спросил про бонусную карту после того, как назвал сумму покупки?",
        "Влияет ли на оценку кассира примечание Тайного Покупателя о том, что кассир, например, не поздоровалась с предыдущим или со следующим покупателем?",
        "Что является основанием для вручения продавцам/кассирам ежегодного звания «Гордость компании»?",
        "Если вам не понятна какая- либо информация в анкете программа, ваши действия?",
        "Просматриваете ли вы анкету с подробными ответами и комментариями ТП в программе?",
        "Какие формы отчетов в модуле ТП вы используете?",
        "Какие вопросы или сложности в работе модуля ТП у вас возникают?",
        "Какие сложности у вас возникают при работе с персоналом по итогам проверок ТП?",
        "Ваши вопросы и пожелания"
    );
    echo('<table border="2"  ><tr ><th colspan="3">' . $family1 . ' ' . $name1 . '</th></tr>');

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
            echo('<td width="250">' .  $question[$i-1] . ' <br> </td>');
            echo('<td>' . $row['quest0' . $i . ''] . '<br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
        while ($i > 9 && $i < 19) {
            echo('<tr>');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td width="100">' . $question[$i-1] . ' <br> </td>');
            echo('<td>' . $row['quest' . $i . ''] . '<br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
    };
    echo('</table><br>');
    /*
        $text=$question[0];
        $text1=$question[1

        /*if ( !file_exists( $family1." ".$name1.".txt" ) ) { // если файл НЕ существует
            $fp = fopen ($family1." ".$name1.".txt", "w");
            fwrite($fp,$text);
            fwrite($fp,$text1);
            fclose($fp);
        } else {
            echo 'Увы, файл уже существует.';
        }*/
}

print_otvety($_POST['family1'], $_POST['name1']);

?>
</body>
</html>

