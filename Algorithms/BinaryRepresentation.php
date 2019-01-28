<?php
/**
 * Purpose: program for conversion of decimal to binary
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php');
echo "enter the decimal value:";
$number=Alutility::getInt();
$arr=Alutility::binary($number); // function to convert in to binary format
for($j=0;$j<sizeof($arr);$j++)
    { 
        echo $arr[$j]; // printing the value
    }
    echo "\n";
    Alutility::decimal($arr);// function to convert in to decimal
?>
