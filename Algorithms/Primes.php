<?php
/**
* Purpose:  program to calculates the primes up to 1000
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  

include('Alutility.php');
 echo "enter to number to find primes:";
 $number=Alutility::getInt();
 
$array2=Alutility::primes($number);
// $p=array(2,3,5,7,11,13,17,19,27,29,31,33,37,39,41,53);
 Alutility::palindrome($array2);
?>