<?php
/**
* File:BubbleSort.php
* Purpose:  Reads in integers prints them in sorted order using Bubble Sort
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

include('Alutility.php');
$myfile=fopen("int.txt","r")or die("Unable to open file!");
// echo fread($myfile,filesize("int.txt"));
// echo " after sorting the elements are";
$int=fread($myfile,filesize("int.txt"));
echo $int;
echo "\n";
$array1=array();
$array1=explode(",","$int"); // converting string in to array
Alutility::bubblesort($array1); // function for arranging in to sorting order by using bubble sort 

?>
