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
$array1 = Dutility::primes($number);
$string = Dutility::primeanagrams($array1);
echo $string;
$array2 = explode(" ", $string);
$ob = new Queue;
for ($i = 0; $i < sizeof($array2); $i++) {
    $ob->enqueue($array2[$i]);
}
$ob->display();
