<?php
include('Alutility.php');
echo "enter the day no from 1-31:";
$day=Alutility::getInt();
echo "enter the month no from 1-12:";
$month=Alutility::getInt();
echo "enter the year :";
$year=Alutility::getInt();
if($year>999)
{
Alutility::calculateDayofWeek($day,$month,$year);
}
else
{
echo "year must be atleast 4 digit number";
}
?>