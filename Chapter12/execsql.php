<!-- Web interface to execute sql -->

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}  
require_once('db.php');
$databases=[];
if (empty($_SESSION['databases'])) {
    $res = execute('SHOW DATABASES');
    $databases = array_filter($res,function($database) {
        return $database['Database'] != 'information_schema' &&
               $database['Database'] != 'mysql' &&
               $database['Database'] != 'performance_schema' &&
               $database['Database'] != 'sys';
    });
    $databases = array_map(function($database) {
        return ($database['Database']);
    },$databases);
    $_SESSION['databases'] = $databases;
} else {
    $databases = $_SESSION['databases'];
}
$selectedDatabase = empty($_REQUEST['database']) ? 'CPS276' : $_REQUEST['database'];
$cmd = '';
if (isset($_REQUEST['cmd'])) {
    $cmd = $_REQUEST['cmd'];
    $cmd = trim($cmd);
}
$results = null;
$error = '';
if (isset($_REQUEST['button'])) {
    if (empty($cmd)) {
        $error = "No command entered";
    }
    else {
        $res = execute($cmd,true,null,$selectedDatabase);
        if (is_array($res) and sizeof($res) > 0) {
            $results = $res;
        }
        elseif (is_array($res)) {
            $error = "No results";
        }
        else {
            $error = $res;
        }
    }
}
?>
<html><title>Execute SQL</title> 
    <form action="execsql.php" method="post">
        <input type="submit" value="Execute SQL" name="button" />
        &nbsp;
        <select name="database">
            <? foreach ($databases as $database) { ?>
              <option value="<?=$database?>" <?=$database == $selectedDatabase ? 'selected' : ''?>><?=$database?></option>
            <? } ?>
        </select>
        <font size="2"> - Database</font>
        <br><br>
        <table cellspacing = "0" cellpadding = "0" border = "0">
            <tr>
                <td valign = "bottom"><font color = "#960a05">SQL Statement</font></td>
                <td valign = "bottom" align="right"><font size = "2"><? echo(is_null($results) ? '' : sizeof($results) . ' records' ); ?></font></td>
            </tr>
            <tr>
                <td colspan="2"><textarea rows="4" autocomplete='off' autocorrect='off' autocapitalize='off' spellcheck='false' cols="80" name="cmd"><?=$cmd?></textarea></td>
            </tr>
         </table>        
    </form>
    <? if (is_null($results)) { ?>
        <?=$error?>
    <? } else { ?>
        <table cellspacing = "0" cellpadding = "2" border = "1">
            <tr>
                <?
                    $rec = $results[0];
                    foreach ($rec as $key=>$value) {
                        if (!is_numeric($key)) {
                            echo("<td><font color = 'blue'>$key</font></td>");
                        }
                    }
                ?>
            </tr>
            <?
                foreach ($results as $result) {
                    echo("<tr>");
                    foreach ($result as $key=>$value) {
                        if (!is_numeric($key)) {
                            echo("<td>$value</td>");
                        }
                    }
                    echo("</tr>");
                }
            ?>
        </table>
    <? } ?>
</html>    