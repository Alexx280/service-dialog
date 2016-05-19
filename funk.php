<?php
//session_start();
//Определение IP адреса комппьютера
/*
function GetRealIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
*/
// Выбор файла для подключения
function getfile()
{
    /*$komp = "";
    $komp = GetRealIP();
    $namekomp = gethostbyaddr($komp);

    if ($namekomp != "sbexam") {  //  выбираем файл
        $config = parse_ini_file('config/1connect.ini', true);
    } else {
        $config = parse_ini_file('config/config.ini', true);
    }*/
    $_SERVER['REMOTE_ADDR']; //пример определения ip
    gethostbyaddr($_SERVER['REMOTE_ADDR']); //пример определения имени по ip
    $config = parse_ini_file('config/1connect.ini', true);
    return $config;
}

// Подключеие к базе
function podkl($config)
{

    $pod = new mysqli($config["database"]["host"], $config["database"]["username"], $config["database"]["password"], $config["database"]["name"]);
    $pod->query("SET NAMES utf8");
    return $pod;
}

function connect()
{
    $config = getfile();
    $link = podkl($config);
    return $link;
}

function insert($table, $values)
{
    foreach ($values as $key => $item) {
        $col = $col . $key . ', ';
        $zna = $zna . '"' . $item . '", ';
    }
    $col = substr($col, 0, strlen($col) - 2);
    $zna = substr($zna, 0, strlen($zna) - 2);

    $query = "INSERT INTO " . $table . " (" . $col . ") VALUES (" . $zna . ")";   //'INSERT INTO bam_users (name, family, e_mail, login, password) VALUES ("'.$fn.'","'.$sn.'","'.$em.'","'.$lo.'","'.$pa.'")'
    return $query;
}

function select($cols = array("*"), $table, $where)
{
    $cols_string = "";
    global $db;
    if (empty($cols)) {
        $cols_string = "*";
    } else {
        foreach ($cols as $item) {
            $cols_string .= $item . ",";
        }
    }
    if ($where == "") {
        $where = "1=1";
    }

    $query = "SELECT " . $cols_string . " FROM " . $table . " WHERE " . $where;

    $temp = $db->mquery($query, array());

    return $temp;
}

function check($family, $pasp_s)
{
    global $link;
    $link = connect();
    $res = $link->query("SELECT * FROM `lama` WHERE `family`= '$family' AND `pasp_s` ='$pasp_s' ");
    if ($res->fetch_assoc()) return $res;
    else {
        return false;
    }
}

function print_otvety($family1, $name1)
{
    $question = array(
        "Что такое Стандарт обслуживания на кассе?",
        "В чем цель Стандарта обслуживания?",
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
    $answers = array(
        "Документ, описывающий основные правила и требования взаимодействия с покупателем",
        "Обеспечивает конкурентное преимущество компании. <br>Гарантирует «фирменное» качество обслуживания в магазинах. <br>Оптимизирует рабочий процесс. <br>",
        "Осуществление контроля соблюдения стандартов обслуживания. <br>Обратная связь покупателей о качестве обслуживания в магазине. <br>",
        "2.Поздоровайтесь: «Здравствуйте!»<br>3.Спросите у покупателя: «Вам пакет большой или маленький?»<br>4.Спросите у покупателя: «У вас есть бонусная карта?»<br>6.Назовите стоимость покупки<br>7.Назовите сумму денег, полученную от Покупателя: «Ваши ….» , и положите их на виду у  Покупателя<br>9.Назовите сумму сдачи: «Ваша сдача…» и положите ее (купюры и мелочь одновременно) поверх чека на монетницу<br>10.При безналичном расчете: попросите Покупателя «Распишитесь, пожалуйста» либо «Введите пин-код, пожалуйста»<br>11.Посмотрите на  Покупателя, улыбнитесь  и поблагодарите его: «Спасибо за покупку, приходите к нам еще!»<br>",
        "8 баллов",
        "Оценка проставляется в зависимости от кол-ва выполненных фраз",
        "Нет",
        "Когда фраза не сказана",
        "Когда одно или более слов фразы не сказаны или слова заменены другими",
        "Когда выполнение фразы не требовалось в данной ситуации",
        "Ответ Нет ",
        "Это доп.информация для руководителя и сотрудника, о том, что сотрудник не всегда выполняет Сервисный диалог",
        "Наличие только максимальных оценок и наибольшее кол-во оценок по сравнению с другими",
        "Задаю вопросы специалисту, курирующему проверки",
        "-",
        "-",
        "-",
        "-",
        "-"
    );
    if ($_POST['family1'] && $_POST['parol-ot']== '321') {
        echo('<table border="2"  ><tr ><th colspan="5"><br>' . $family1 . ' ' . $name1 . '<br><br></th></tr>');
    } else {}

    $link = connect();
    //$login= "SELECT * FROM `lama` WHERE date_test LIKE '".$_POST['place']."' AND `place` = '".$name_place."'";
    $login = "SELECT * FROM `motiv` WHERE family = '" . $_POST['family1'] . "'";

    //$login= "SELECT * FROM `motiv` WHERE family = '".$_POST['family1']."' AND name = ".$_POST['name1']."'";
    $res = $link->query($login);

    $i = 1;
    if ($_POST['family1']) {
        echo('<tr>');
        echo('<td width="20"><p style="font-weight: bold" class="otstup-table">№</p></td>');
        echo('<td width="250"><p style="font-weight: bold" class="otstup-table">Вопрос</p></td>');
        echo('<td><p style="font-weight: bold" class="otstup-table">Ответ сотрудника</p> </td>');
        echo('<td><p style="font-weight: bold" class="otstup-table">Правильный ответ</p></td>');
        echo('<td><p style="font-weight: bold" class="otstup-table">Проверка</p></td>');
        echo('</tr>');
    } else {}


    while ($row = $res->fetch_assoc()) {
        while ($i < 10) {
            echo('<tr >');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td width="250"><div class="otstup-table">' .  $question[$i-1] . ' </div><br> </td>');
            echo('<td align="left"><div class="otstup-table">' . $row['quest0' . $i . ''] . '</div><br> </td>');
            echo('<td width="350"  align="left"><div class="otstup-table">' .  $answers[$i-1] . '</div> <br> </td>');
            if (($row['quest0' . $i . ''])==$answers[$i-1]){$ok = 'Yes';}else{$ok = 'No';}
            echo('<td width="100" >'.$ok.'<br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
        while ($i > 9 && $i < 15) {
            echo('<tr>');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td width="100"><div class="otstup-table">' . $question[$i-1] . ' </div><br> </td>');
            echo('<td align="left"><div class="otstup-table">' . $row['quest' . $i . ''] . '</div><br> </td>');
            echo('<td width="350" align="left"><div class="otstup-table">' .  $answers[$i-1] . ' </div><br> </td>');
            if (($row['quest' . $i . ''])==$answers[$i-1]){$ok = 'Yes';}else{$ok = 'No';}
            echo('<td width="80" >'.$ok.' <br> </td>');
            echo('</tr>');
            $i = $i + 1;
        }
        while ($i > 14 && $i < 20) {
            echo('<tr>');
            echo('<td width="20">' . $i . ' <br> </td>');
            echo('<td width="100"><div class="otstup-table">' . $question[$i-1] . ' </div><br> </td>');
            echo('<td align="left" colspan="3"><div class="otstup-table">' . $row['quest' . $i . ''] . '</div><br> </td>');
            /*echo('<td width="350" align="left" > <br> </td>');
            if (($row['quest' . $i . ''])==$answers[$i-1]){$ok = 'Yes';}else{$ok = 'No';}
            echo('<td width="100" > <br> </td>');*/
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


Class link_
{
    function m_query($query, $value = array())
    {
        $pieces = explode('?', $query);
        $entry = sizeof($pieces);
        if ($entry > 0) {
            $query = '';
            $i = 0;
            foreach ($pieces as $piece) {
                $value_current = $value[$i];
                $query .= $piece . $value_current;
                $i++;

            }
        }

        if ($result = $this->$link->query($query)) {

            if (!is_object($result)) {
                return $this->$link->insert_id;
            }
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }
}

$link = new link_;
?>

