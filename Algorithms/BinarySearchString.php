<?php
/**
* Purpose:   Read in a list of words from File. Then prompt the user to enter a word to search the list. 
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

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