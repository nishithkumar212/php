<?php
/**
* Purpose: program to print the primes and prime anagrams in 2_D format.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
include('LinkedList.php');
$obj=new LinkedList;
$number=1000;
$array1=Dutility::primes($number);
$string=Dutility::primeanagrams($array1); //retrieving the primeanagrams 
$array2=explode(" ",$string);
for($i=0;$i<sizeof($array1);$i++)
{
        $obj->add($array1[$i]);
}
for($i=0;$i<$obj->size;$i++)
{
        $bool=$obj->search($array2[$i]); // searching the element 
        if($bool==true)
        {
                $obj->delete($array2[$i]); // deleting the element in linkedlist
        }
}
//$obj->display();
$rrr=$obj->linkeddisplay(); // displaying the element of linkedlist and storing in an array
print_r($rrr);
print_r($array2);
$dimension=array();
for($i=0;$i<sizeof($rrr);$i++)
{
        $dimension[0][$i]=$rrr[$i]; //storing in to the first dimension of an array
}
for($j=0;$j<sizeof($array2);$j++)
{
        $dimension[1][$j]=$array2[$j]; // storing in to the second dimension of an array
}
// for($i=0;$i<2;$i++)
// {
//         for($j=0;$j<sizeof($array2);$j++)
//         {
//                 echo $dimension[$i][$j];
//         }
//         echo "\n";
// }
// print_r($dimension);
for($i=0;$i<2;$i++)
{
        for($j=0;$j<sizeof($dimension[$i]);$j++)
        {
                echo $dimension[$i][$j]." "; //printing  the elements 
        }
        echo "\n";
}