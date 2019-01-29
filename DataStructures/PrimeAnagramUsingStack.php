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
    /** function to retrieve the primes of an array */
$array1=Dutility::primes($num); 

    /** function to retrieve the primeanagrams  */
$string =Dutility::primeanagrams($array1);

    /**creating an object for a stack */
$obj=new Stack; 
 $array2=explode(" ",$string);
$obj=new Stack;
  for($i=0;$i<sizeof($array2);$i++)
  {
      /** pushing the elements in to the stack */
       $obj->push($array2[$i]);
 }
 for($i=0;$i<sizeof($array2);$i++)
 {
    /** poping the elemnets in to the stack */
      $array[$i]=$obj->pop(); 
}
$obj1=new Stack;
for($j=0;$j<sizeof($array);$j++)
{
  /**pushing the elements in to the stack */
  $obj1->push($array[$j]); 
}

  /**dispalaying the elements in to the stack */
$obj1->display(); 
?>
