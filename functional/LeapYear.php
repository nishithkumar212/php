<?php
/**
* File:LeapYear.php
* Purpose:program that calculates wheteher it is a leap year or not
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/**including the file */
include('utility.php'); 
echo "enter the year :";
/** calling the function to take integer */
$year=utility::getInt();
/** checking the condition */ 
if($year>999) 
{
    /**checking the condition */
utility::leapyear($year); 
}
else
{
    echo " make sure that entered year is a 4 digit number";
}
?>