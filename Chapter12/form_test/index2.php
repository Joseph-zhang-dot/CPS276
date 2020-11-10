<!-- Sql Injection Log In -->
<?php
require_once('../db.php');
$message='';
$pw = '';
$uname = '';
if (isset($_REQUEST['login'])) {
    $pw = isset($_REQUEST['pw']) ? trim($_REQUEST['pw']) : '';
    $uname = isset($_REQUEST['uname']) ? trim($_REQUEST['uname']) : '';
    
    // username can be anything
    // |anything' or 'x'='x|   (omit pipes)
  
    $sql = "SELECT * FROM teacher WHERE teachername = '$uname' AND pw = '$pw'";    
    echo($sql);
    $results = execute($sql,true);    
  
    //Using prepared statements
    // $sql = "SELECT * FROM teacher WHERE teachername = ? AND pw = ?";
    // $arguments = array();
    // $arguments[] = $uname;
    // $arguments[] = $pw;
    // $results = execute($sql,true,$arguments);    

    
    if ($results != null && sizeof($results) > 0) {
        $message = 'Logged In';
    }
    else {
        $message = "<font color = 'darkred'>Invalid name or password.</font>";
    }
}
?>
<html>
    <form action="index.php" method="post">
        <table border="0" cellpadding="3" cellspacing="0">
            <tr>
                <td>User Name</td>
                <td width=3" />
                <td><input type="text" name="uname" value="<?=$uname?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td width=3" />
                <td><input type="text" name="pw" value="<?=$pw?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" value="Log In" name="login"></td>
            </tr>
        </table>
        <br>
        <?=$message?>
    </form>
    
    
    
</html>