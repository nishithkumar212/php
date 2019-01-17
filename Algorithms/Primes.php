<?php
include('Alutility.php');
 echo "enter to number to find primes:";
 $number=Alutility::getInt();
Alutility::primes($number);
// $p=array(2,3,5,7,11,13,17,19,27,29,31,33,37,39,41,53);
// Alutility::palindrome($p);
?>