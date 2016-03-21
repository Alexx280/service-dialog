<?php
/*if (substr(__FILE__,38,2)+0<10)
{$chislo = "0".strval(substr(__FILE__,38,2)+0-1);}
else
{$chislo = strval(substr(__FILE__,38,2)+0-1);}*/
$link=connect();
$q = "UPDATE `motiv` SET `quest" .$chislo. "` = '" . $_POST['text' . $chislo ] . "' WHERE `id_motiv`=" . $_SESSION['id_motiv'];
$res = $link->query($q);
?>