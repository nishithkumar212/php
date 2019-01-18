<?php
/**
* Purpose:program that calculates wheteher it is a leap year or not
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php'); //including the file
echo "enter the year :";
$year=utility::getInt(); // calling the function to take integer
if($year>999) // checking the condition
{
utility::leapyear($year); // if condition becomes true which it calls the function leapyear
}
else
{
    echo " make sure that entered year is a 4 digit number";
}
?>