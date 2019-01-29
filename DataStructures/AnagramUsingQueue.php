<?php
/**
* Purpose: Prime Numbers that are anagrams and adding in to the queue.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include 'Dutility.php';
include 'Queue.php';
echo "enter the range you want the anagrams:";
$number = Dutility::getInt();
/**
 *  function to get the prime numbers 
 */
$array1 = Dutility::primes($number); 

/**
 *  function to get the primeanagrams
 */
$string = Dutility::primeanagrams($array1);

/**
 *  function to print the anagrams
 */
echo $string; 

/**
 *  function used for converting string in to array 
 */
$array2 = explode(" ", $string);
$ob = new Queue;

/**
 *  function used for adding in to the queue
 */
for ($i = 0; $i < sizeof($array2); $i++) 
{
    $ob->enqueue($array2[$i]); 
}

/**
 *  function used for displaying
 */
$ob->display(); 
