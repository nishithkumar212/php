<?php
include('Alutility.php');
$myfile=fopen("String.txt","r") ;
$string=fread($myfile,filesize("String.txt"));
echo $string;
echo "\n";
$array=explode(" ,","$string");
echo "\n";
echo "enter the word to search:";
$string1=Alutility::getString();
 Alutility::binarySearchstring($array,$string1);
echo "\n";
?>