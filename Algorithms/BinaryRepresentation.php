<?php
/**
 * File:BinaryRepresentation.php
 * Purpose: program for conversion of decimal to binary
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php');
echo "enter the decimal value:";
$number=Alutility::getInt();
/**function to convert in to binary format */
$arr=Alutility::binary($number); 
for($j=0;$j<sizeof($arr);$j++)
    { 
        /**printing the value */
        echo $arr[$j]; 
    }
    echo "\n";
    /** function to convert in to decimal */
    Alutility::decimal($arr);
?>
