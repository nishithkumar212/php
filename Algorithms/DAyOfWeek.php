<?php
include('Alutility.php');
echo "enter the day no from 1-31:";
$day=Alutility::getInt();
echo "enter the month no from 1-12:";
$month=Alutility::getInt();
echo "enter the year :";
$year=Alutility::getInt();
Alutility::calculateDayofWeek($day,$month,$year);
?>