<?php
/**
* File:InsertionSortString.php
* Purpose:  Reads in strings from standard input and prints them in sorted order using insertionsort
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

include('Alutility.php');//including the file
$myfile=fopen("String.txt","r") ; //opening the file and storing in a file
$string=fgets($myfile); //retrieving the file
echo $string; // printing the file content
echo "\n";
$array1=explode(" ",$string); // converting in to string
for($i=0;$i<sizeof($array1);$i++) //iterating through the loop
{
    echo $array1[$i]; // printing the index of an array
}
Alutility::insertionsortstring($array1); //calling the method 
?>
