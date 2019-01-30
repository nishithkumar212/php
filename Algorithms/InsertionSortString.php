<?php
/**
* File:InsertionSortString.php
* Purpose:  Reads in strings from standard input and prints them in sorted order using insertionsort
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  
/**including the file */
include('Alutility.php');
/**opening the file and storing in a file */
$myfile=fopen("String.txt","r") ; 
/**retrieving the file */
$string=fgets($myfile);
/** printing the file content */ 
echo $string; 
echo "\n";
/** converting in to string */
$array1=explode(" ",$string); 
/**iterating through the loop */
for($i=0;$i<sizeof($array1);$i++) 
{
    /** printing the index of an array */
    echo $array1[$i]; 
}
/**calling the method  */
Alutility::insertionsortstring($array1); 
?>
