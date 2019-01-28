<?php
/**
* Purpose:   Read in a list of words from File. Then prompt the user to enter a word to search the list. 
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

 include('Alutility.php');
$myfile=fopen("String.txt","r") ; //opening  the file
$s=fread($myfile,filesize("String.txt")); //reading the file
echo $s;
echo "\n";
$array=explode(" ","$s"); //converting string in to array
echo "\n";
echo "enter the word to search:";
$sp=Alutility::getString();
 Alutility::binarySearchstring($array,$sp); // function for binary search 
echo "\n";
?>