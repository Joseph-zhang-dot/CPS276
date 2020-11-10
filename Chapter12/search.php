<!-- Searching with user input -->
<?
require_once('db.php');
if (!empty($_REQUEST['id'])) {
    $sql = "SELECT player1 FROM matches WHERE id = ?";
    $args = [];
    $args[] = $_REQUEST['id'];
    $results = execute($sql,true,$args);
    print_r($results);
}
?>
<html>
    <div>
        <form>
            <input type="text" name="id" placeholder="ID">
            <br><br>
            <input type="submit" value="Search">
        </form>
    </div>
</html>