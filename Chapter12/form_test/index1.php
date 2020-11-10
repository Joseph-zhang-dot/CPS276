<?php
require_once('../db.php');
$results = execute('select teacherid from teacher', true);
?>
<html>
<? $counter = 0 ?>
<table border="1" cellpadding="3" cellspacing="0">
<? for (;$counter < sizeof($results);$counter++){ ?>
        <? if($counter %4 == 0){ ?>
            <tr>
        <? } ?>
            <td><a href="index2.php?id=<?=$results[$counter]['teacherid']?>"><?=$results[$counter]['teacherid']?></td>
            <? if(($counter+1)% 4 == 0)?>
            </tr>
        <? } ?>
    <? } ?>
 

</table>
</html>