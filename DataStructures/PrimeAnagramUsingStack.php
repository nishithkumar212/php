<?php
/**
* Purpose: program to find the prime anagrams using stack.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  

include('Dutility.php');
include('Stack.php');
echo "enter the range of primeanagrams you want to know:";
$num=Dutility::getInt();
$array1=Dutility::primes($num); // function to retrieve the primes of an array
$string =Dutility::primeanagrams($array1); // function to retrieve the primeanagrams 
$obj=new Stack; // creating an object for a stack
 $array2=explode(" ",$string);
$obj=new Stack;
  for($i=0;$i<sizeof($array2);$i++)
  {
       $obj->push($array2[$i]);// pushing the elements in to the stack
 }
 for($i=0;$i<sizeof($array2);$i++)
 {
      $array[$i]=$obj->pop(); // poping the elemnets in to the stack
}
$obj1=new Stack;
for($j=0;$j<sizeof($array);$j++)
{
  $obj1->push($array[$j]); //pushing the elements in to the stack
}
$obj1->display(); // dispalaying the elements in to the stack
?>
