<!-- Uploading a file -->

<?php
// Be sure your form has the enctype attribute set.
// You must execute the chmod commands on the files directory first.
// $_FILES is a superglobal, just like $_REQUEST.
// To check the file type, see the 'type' field in $_FILES
// To get the uploaded location of the file, see the 'tmp_name' field in $_FILES
// To get the original name of the file, see the 'name' field in $_FILES
// To get the original size of the file, see the 'size' field in $_FILES

print_r($_FILES);
?>

<html><div>
    <form enctype="multipart/form-data" method="post">
        <input type="submit" value="Upload File" name="upload" />&nbsp;
        <input accept=".pdf" type="file" name="myfile"/>
        <br><br>
        <input type="text" placeholder="File Name" name="filename"> 
    </form>
</div>
</html>