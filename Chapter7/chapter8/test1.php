<?php
mkdir("/home/joseph/newfolder", 0777, true);
touch('a.html');

$fileAsArry = fopen('text1.txt','r');
echo($fileAsArry);
fclose($fileAsArry);