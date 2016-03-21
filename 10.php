<?php
session_start();
include_once 'head.tpl';
include_once ("funk.php");

if (substr(__FILE__,38,2)+0<=10)
{$chislo = "0".strval(substr(__FILE__,38,2)+0-1); echo $chislo;}
else
{$chislo = strval(substr(__FILE__,38,2)+0-1); echo $chislo;}
$link=connect();
$q = "UPDATE `motiv` SET `quest" .$chislo. "` = '" . $_POST['text' . $chislo ] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);
?>

<!DOCTYPE HTML>
<html>
<div id='centr-q'>
    <div id="quest" >

        <p class="tq"> </p><br />

            <form method="post" action="<?php echo (substr(__FILE__,38,2)+1) ?>.php" style="">
                Является ли нарушением, если кассир спросил про бонусную карту после того, как назвал сумму покупки?<br><br>

                А. Да  <br>   В. Нет   <br>    С. Не знаю   <br>   D. Не уверен(а), считаю, что влияет <br><br><br>
                <p><textarea rows="7" cols="133" name="text10"></textarea></p><br><br>

                <div style="text-align: center;">
                    <input type="submit" value="Дальше" class="table-form"/><br>
                </div>

            </form>

        <div class="strings"><p><?php echo (substr(__FILE__,38,2)) ?>/18</p></div>
    </div>
</div>
<!--   <a href="end.php">
       <div class="knopka3 ">
           <p>Далее</p>
       </div>
   </a>-->

</html>