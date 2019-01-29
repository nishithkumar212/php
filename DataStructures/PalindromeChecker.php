<?php
/**
* Purpose: program to calculate whether the given string is palindrome or not
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
include('Deque.php');
$obj=new Deque;
echo "enter the string :";
$name=Dutility::getString();
    /**splitting the string in to an array */
$array1=str_split($name); 
$array2=array();
for($i=0;$i<sizeof($array1);$i++)
{
    /**adding each element in to an array */
    $obj->AddRear($array1[$i]); 
}
for($j=0;$j<sizeof($array1);$j++)
{
    /**removing the element  */
    $array2[$j]=$obj->removeRear(); 
}
    /**checking the condition  */
if($array1==$array2) 
{
    echo "given string is a palindrome:";
}
else
{
  echo "given string is not a palindrome";
  echo "\n";
}