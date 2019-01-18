<?php
/**
* Purpose:program to calculate the roots .
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');//including the file
echo " enter the value for a :";
$a=utility::getInt(); //calling the function to take integer
echo " enter the value for b :";
$b=utility::getInt(); //calling the function to take integer
echo " enter the value for c :";
$c=utility::getInt();//calling the function to take integer
utility::roots($a,$b,$c); // 
?>