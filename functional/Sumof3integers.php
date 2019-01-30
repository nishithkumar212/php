<?php
/**
* File:Sumof3integers.php
* Purpose: program to find the sum of 3 integers.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
include('utility.php');
$array1=array();
echo " enter the dimension of an array";
$number=utility::getInt();
/**function used to call the method */
utility::triplets($number);
?>