<?php
/**
* File:BinarySearchString.php
* Purpose:   Read in a list of words from File. Then prompt the user to enter a word to search the list. 
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

 include('Alutility.php');
 /**opening  the file */
$myfile=fopen("String.txt","r") ; 
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