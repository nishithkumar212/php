<?php
/**
* Purpose: program to calculate the binary search of a tree
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
class Binarysearchtree
{
/**
*  function for factorial of a given number
*/
public  function factorial($num) 
{
    $fact=1;
    for($i=1;$i<=$num;$i++)
    {
        $fact=$fact*$i;
    }
     return $fact;
}
}

/**
 *  creating an object.
 */
$obj=new binarysearchtree; 
echo "enter a number of nodes:";
$num=Dutility::getInt();
$first=$obj->factorial(2*$num);
$second=$obj->factorial($num+1);
$third=$obj->factorial($num);

/**
 * formuale to calculate the binary search 
 */
$formulae=floor($first/($second*$third)); 
echo  "the possible  binary search of a tree is:".$formulae;