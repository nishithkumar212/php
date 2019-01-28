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
$array1 = Dutility::primes($number); // function to get the prime numbers 
$string = Dutility::primeanagrams($array1);//function to retrieve primes
echo $string; // printing the primeanagrams
$array2 = explode(" ", $string); // converting string in to array
$ob = new Queue;
for ($i = 0; $i < sizeof($array2); $i++) 
{
    $ob->enqueue($array2[$i]); // adding in to the queue
}
$ob->display(); // dispalying the elements in the queue.
