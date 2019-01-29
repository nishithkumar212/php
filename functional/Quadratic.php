<?php
/**
* File:Quadratic.php
* Purpose:program to calculate the roots .
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
 /**including the file */
include('utility.php');
echo " enter the value for a :";
/**calling the function to take integer */
$a=utility::getInt(); 
echo " enter the value for b :";
/**calling the function to take integer */
$b=utility::getInt(); 
echo " enter the value for c :";
/**calling the function to take integer */
$c=utility::getInt();
utility::roots($a,$b,$c); // 
?>