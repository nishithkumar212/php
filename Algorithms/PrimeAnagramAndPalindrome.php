<?php
/**
 * File:PrimeAnagramAndPAlindrome.php
 * Purpose: program to calculate the primes that are palindrome and anagrams
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php'); //including the file
echo "enter the range";
$number=Alutility::getInt(); // calling the method to get int type 
$array=Alutility::primes($number); // calling the function 
Alutility::palindrome($array); // calling the function
echo "\n";
Alutility::primeanagrams($array); // calling the method
?>