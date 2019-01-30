<?php
/**
* File:Primes.php
* Purpose:  program to calculates the primes up to 1000
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  
 include('Alutility.php');
 echo "enter to number to find primes:";
 $number=Alutility::getInt();
 /**function to find the prime numbers  */
 $array2=Alutility::primes($number); 
 for($i=0;$i<sizeof($array2);$i++)
 {
     /**printing the primenumbers. */
     echo $array2[$i]." "; 
 }
?>