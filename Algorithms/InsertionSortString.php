<?php
include('Alutility.php');
$myfile=fopen("String.txt","r") ;
$string=fgets($myfile);
echo $string;
echo "\n";
$array1=explode(" ",$string);
for($i=0;$i<sizeof($array1);$i++)
{
    echo $array1[$i];
}
Alutility::insertionsortstring($array1);
?>
