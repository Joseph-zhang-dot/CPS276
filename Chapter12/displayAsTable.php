<!-- Display sql result set as table -->
<?
require_once('db.php');
$sql = "SELECT * FROM student";
$results = execute($sql);

echo($results[1]['studentname']);

?>
<html>
    <div>
        <table border="1">
            <? foreach ($results as $result) { ?>
            <tr>
                <td><? echo($result['studentname']);  ?></td>
                <td><? echo($result['studentid']);  ?></td>
            </tr>
            <? } ?>
        </table>
    </div>
</html>