<?php
/**
 * File:PrimeAnagramAndPAlindrome.php
 * Purpose: program to calculate the primes that are palindrome and anagrams
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
/**including the file */
include('Alutility.php'); 
echo "enter the range";
/** calling the method to get int type  */
$number=Alutility::getInt(); 
/** calling the function  */
$array=Alutility::primes($number);
/** calling the function */ 
Alutility::palindrome($array); 
echo "\n";
/**calling the method */
Alutility::primeanagrams($array); 
?>