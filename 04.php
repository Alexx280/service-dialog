<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");

if (substr(__FILE__,38,2)+0<10)
{$chislo = "0".strval(substr(__FILE__,38,2)+0-1);}
else
{$chislo = strval(substr(__FILE__,38,2)+0-1);}
$link=connect();
$q = "UPDATE `motiv` SET `quest" .$chislo. "` = '" . $_POST['text' . $chislo ] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);

?>
    <!DOCTYPE HTML>
    <html>
    <div id='centr-q'>
    <div id="quest" >

        <p class="tq"></p> <br />
        <form method="post" action="<?php echo "0".(substr(__FILE__,38,2)+1) ?>.php">
            Какой балл является максимальным за выполнение СД по новой системе оценки?
            <!--
            Укажите верные утверждения:<br /><br />

            <input id="in1" class="checkbox" type="checkbox" name="inet1" value="0" />
            <label for="in1">Могу использовать интернет в личных целях, после работы, т.к. это не влияет на мою работу</label> <br>
            <input id="in2" class="checkbox" type="checkbox" name="inet2" value="0" />
            <label for="in2">Могу загружать из интернет программное обеспечение необходимое мне для работы</label> <br>
            <input id="in3" class="checkbox" type="checkbox" name="inet3" value="1" />
            <label for="in3">Могу использовать общие папки сервера и почту для передачи рабочих файлов сотрудникам <br>организации </label> <br>
            <input id="in4" class="checkbox" type="checkbox" name="inet4" value="0" />
            <label for="in4">Могу дать возможность коллеге скачать из интернета необходимую информацию, без моего участия </label> <br>
            <input id="in5" class="checkbox" type="checkbox" name="inet5" value="0" />
            <label for="in5">Могу  отправлять личные объявления в корпоративный чат, в обеденное время</label> <br>
            <input id="in6" class="checkbox" type="checkbox" name="inet6" value="0" />
            <label for="in6">Могу  хранить рабочую информацию на сайтах с сервисом передачи и хранения информации</label> <br>
            <input id="in7" class="checkbox" type="checkbox" name="inet7" value="1" />
            <label for="in7">Могу хранить рабочую информацию только в папке отдела на сервере организации либо на <br>своём рабочем компьютере</label> <br>
            <br />
            <br />
            <br />-->
            <br />
            А. 5 баллов   <br>    В. 8 баллов   <br>    С. 10 баллов  <br>   D. Не знаю <br><br><br><br><br>
            <p><textarea rows="7" cols="133" name="text04"></textarea></p><br><br>

            <div style="text-align: center;"><input type="submit" value="Дальше" class="table-form"/><br></div>
            </form>

        <div class="strings"><p><?php echo (substr(__FILE__,38,2)) ?>/18</p></div>
    </div>
    </div>
  <!--  <a href="5.php">
        <div class="knopka3 ">
            <p>Далее</p>
        </div>
    </a>-->
    </html>