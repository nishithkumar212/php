<?php
/**
* File:Factors.php
* Purpose: program to calculate the prime factors of a given number
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/**include('utility.php') */
include('utility.php');
echo "enter the number:";
/** calling the function to get integer */
$number=utility::getInt();

/** calling the method to print the primefactors */
utility::primeFactors($number); 
?>