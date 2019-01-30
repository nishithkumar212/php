<?php
/**
* File:Monthlypayment.php
* Purpose: program to calculate the monthly payment by taking principal as(p) ,year as(y) and rate as(r)
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

include('Alutility.php');
echo "enter the priciple value:";
$p=Alutility::getInt();
echo " enter how many years:";
$y=Alutility::getInt();
echo "enter the rate value:";
$r=Alutility::getFloat();
/**caling the function declared in utility */
Alutility::monthlypayment($p,$y,$r); 
?>