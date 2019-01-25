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
$array1=Dutility::primes($num);
$string =Dutility::primeanagrams($array1);
$obj=new Stack;
 $array2=explode(" ",$string);
$obj=new Stack;
  for($i=0;$i<sizeof($array2);$i++)
  {
       $obj->push($array2[$i]);
 }
 for($i=0;$i<sizeof($array2);$i++)
 {
      $array[$i]=$obj->pop();
}
$obj1=new Stack;
for($j=0;$j<sizeof($array);$j++)
{
  $obj1->push($array[$j]);
}
$obj1->display();
?>
