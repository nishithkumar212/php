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
/**reading the file */
$s=fread($myfile,filesize("String.txt")); 
echo $s;
echo "\n";
/**converting string in to array */
$array=explode(" ","$s"); 
echo "\n";
echo "enter the word to search:";
$sp=Alutility::getString();
/** function for binary search  */
 Alutility::binarySearchstring($array,$sp); 
echo "\n";
?>