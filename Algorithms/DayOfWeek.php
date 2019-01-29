<?php
/**
* File:DayOfWeek.php
* Purpose:  program for  calculating the day of a week
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

include('Alutility.php');
echo "enter the day no from 1-31:";
$day=Alutility::getInt();
echo "enter the month no from 1-12:";
$month=Alutility::getInt();
echo "enter the year :";
$year=Alutility::getInt();
if($year>999) //checking the condition
{
Alutility::calculateDayofWeek($day,$month,$year); // function to calculate the day of a week
}
else
{
echo "year must be atleast 4 digit number"; 
}
?>hp