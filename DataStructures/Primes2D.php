<?php
/**
* Purpose: program for printing the primes in 2-D format.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  

include('Dutility.php');
$number=1000;
$j=0;
$range=100;
$primesarr=Dutility::primes($number);
$primenumbers= array();
$k=0;
 for($i=0;$i<10;$i++)
 {
     global $j;
     global $range;
     for($j=0;$j<100;$j++)
     {
        if($k==sizeof($primesarr)||$primesarr[$k]>$range)
        {
            break;
        }
         $primenumbers[$i][$j]=$primesarr[$k++];
         
    }
     $range+=100;
 }
 print_r($primenumbers);
 for($i=0;$i<sizeof($primenumbers);$i++)
 {
     for($j=0;$j<sizeof($primenumbers[$i]);$j++)
     {
         echo $primenumbers[$i][$j]." ";
     }
     echo "\n";
    }
