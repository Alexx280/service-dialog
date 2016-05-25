<?php
/*session_start();*/
include_once 'funk.php';
//include_once 'input_user_data.tpl';
//include_once 'excel/simplexlsx.class.php';
//include_once 'excel/simplexlsx.example.php';
/*include_once 'inter.tpl';*/


/*
$link=connect();
$login= "SELECT lama_id FROM `lama` WHERE family= '".$_POST['family']."' AND name = '".$_POST['name']."' AND code = '".$_POST['code']."'";
$res = $link->query($login) ;
$row = $res->fetch_assoc();
*/
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <title> Сервисный диалог на кассе </title>
    <link rel='stylesheet' type='text/css' href='design.css'/>
    <!--<link rel='stylesheet' type='text/css' href='animate.css'/>
    <script type="text/javascript" src="function.js"></script>-->
    <script type="text/javascript" src="jquery.js"></script>

</head>
<body>

            <div id='centr' >
                <form method="post" action="inter.php">
                    Фамилия:<br>
                    <input type="text" id="fa" name="family" size="30" required="required"
                           title="Для ведения информации переключите клавиатуру в режим русских букв"><br>
                    Имя:<br>
                    <input type="text" id="na" name="name" size="30" required="required"><br>
                    Отчество:<br>
                    <input type="text" id="fn" name="father_name" size="30" required="required"><br>

                    Должность:<br>
                    <select name="job" style="width: 205px">
                        <option value="">Выберите из списка</option>
                        <option value="ЗУМ">ЗУМ</option>
                        <option value="УМ">УМ</option>

                    </select><br>

                    Опыт работы в компании:<br>
                    <select name="first_day" style="width: 205px">
                        <option value="">Выберите из списка</option>
                        <option value="Меньше 1 месяца">Меньше 1 месяца</option>
                        <option value="Больше 1 месяца">Больше 1 месяца</option>
                        <option value="Больше 3 месяцев">Больше 3 месяцев</option>
                        <option value="Больше 6 месяцев">Больше 6 месяцев</option>
                        <option value="Более 1 года">Более 1 года</option>
                        <option value="Более 2 лет">Более 2 лет</option>
                        <option value="Более 3 лет">Более 3 лет</option>
                        <option value="Более 5 лет">Более 5 лет</option>
                        <option value="Более 10 лет">Более 10 лет</option>

                    </select><br>
                    
                    Место работы:<br>
                    <select name="place" style="width: 205px">
                        <option value="">Выберите из списка</option>
                        <option value="Кулагина, 6а">Кулагина, 6а</option>
                        <option value="30лет Победы, 7">30лет Победы, 7</option>
                        <option value="79 Гв.Дивизии, 12/1">79 Гв.Дивизии, 12/1</option>
                        <option value="Академический, 13">Академический, 13</option>
                        <option value="Алтайская, 118">Алтайская, 118</option>
                        <option value="Бела Куна, 26/1">Бела Куна, 26/1</option>
                        <option value="Бирюкова, 8">Бирюкова, 8</option>
                        <option value="Богашёвский тракт">Богашёвский тракт</option>
                        <option value="Б.Подгорная,87">Б.Подгорная,87</option>
                        <option value="Вершинина, 44">Вершинина, 44</option>
                        <option value="Вокзальная, 41">Вокзальная, 41</option>
                        <option value="Грузинская, 17">Грузинская, 17</option>
                        <option value="Елизаровых, 46/1">Елизаровых, 46/1</option>
                        <option value="Иркутский тракт, 15">Иркутский тракт, 15</option>
                        <option value="Иркутский тракт, 170">Иркутский тракт, 170</option>
                        <option value="Иркутский тракт, 42">Иркутский тракт, 42</option>
                        <option value="Иркутский тракт, 74">Иркутский тракт, 74</option>
                        <option value="Иркутский тракт, 96">Иркутский тракт, 96</option>
                        <option value="Карла Ильмера, 13">Карла Ильмера, 13</option>
                        <option value="Карташова, 34">Карташова, 34</option>
                        <option value="Киевская, 109/1">Киевская, 109/1</option>
                        <option value="Киевская, 13">Киевская, 13</option>
                        <option value="Киевская, 68">Киевская, 68</option>
                        <option value="Коммунистический, 143">Коммунистический, 143</option>
                        <option value="Кирова, 65">Кирова, 65</option>
                        <option value="Красноармаеская, 101а">Красноармаеская, 101а</option>
                        <option value="Красноармаеская, 114">Красноармаеская, 114</option>
                        <option value="Лазарева, 1">Лазарева, 1</option>
                        <option value="Лазо, 3">Лазо, 3</option>
                        <option value="Ленина, 1">Ленина, 1</option>
                        <option value="Мира, 27в">Мира, 27в</option>
                        <option value="Мира, 76">Мира, 76</option>
                        <option value="Мокрушина, 24">Мокрушина, 24</option>
                        <option value="Московский тракт, 17">Московский тракт, 17</option>
                        <option value="Нефтяная, 1">Нефтяная, 1</option>
                        <option value="Новотрактовая, 1">Новотрактовая, 1</option>
                        <option value="Сибирская, 104а">Сибирская, 104а</option>
                        <option value="Сибирская, 9/1">Сибирская, 9/1</option>
                        <option value="Сибирская, 60">Сибирская, 60</option>
                        <option value="Смирнова, 38">Смирнова, 38</option>
                        <option value="Стрелочная, 23">Стрелочная, 23</option>
                        <option value="Яковлева, 6">Яковлева, 6</option>
                        <option value="Фрунзе, 102">Фрунзе, 102</option>
                        <option value="Фрунзе, 119">Фрунзе, 119</option>
                        <option value="Фрунзе, 120">Фрунзе, 120</option>
                        <option value="Фрунзе, 186">Фрунзе, 186</option>
                        <option value="Фрунзе, 92а">Фрунзе, 92а</option>

                    </select><br>

                    Код:<br>
                    <input type="text" name="code" id="co" size="30" required="required" placeholder="0000" title="Код получите у специалиста по безопасности"></br>

                    <br>
                    <br>
                    <input type="submit" value="Начать" class="table-form"/>

                </form>
                <div>
                    <form method="post" action="index.php">
                        <button type="submit" class="table-form"> На главную</button>
                    </form>
                </div>

            </div>


</body>

<script>
    document.getElementById('fa').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('na').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('fn').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
