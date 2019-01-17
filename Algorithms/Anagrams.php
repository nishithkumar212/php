<?php
include('Alutility.php');
echo "enter the  first string:";
$String1=Alutility::getString();
echo "enter the second string:";
$String2 = Alutility::getString();
Alutility::anagram($String1,$String2);
?>