<?php
include('Alutility.php');
$myfile=fopen("int.txt","r")or die("Unable to open file!");
echo fread($myfile,filesize("int.txt"));

//$int=fread($myfile,filesize("int.txt"));
//echo $int;
// echo "\n";
// $array1=array();
// $array1=explode(",","$int");
// Alutility::bubblesort($array1);

?>
