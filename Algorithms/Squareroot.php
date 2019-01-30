<?php
/**
 * File:SquareRoot.php
 * Purpose: program to calculate the square root of a given number
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php');
echo " enter a number";
$num=Alutility::getInt();
/** function to calculate the square root of a given number */
Alutility::squareroot($num); 
?>
