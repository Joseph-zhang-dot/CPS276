<?php
$db = null;
$remoteDatabase = null;

function getPDO(){
    global $db;
    if ($db != null){
        return $db;
    }
    try{
        $db = new PDO('mysql:host=localhost;port=3306;dbname=CPS276','dandrew1','1234');
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,flase);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    }
    catch(Exception $eZ){
        echo('DB Connection Error -' . $eZ -> getMessage());
        exit();
    }
}
?>