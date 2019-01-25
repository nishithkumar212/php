<?php
/**
* Purpose: program to calculate the binary search of a tree
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  

include('Dutility.php');
class binarysearchtree
{   
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
$obj=new binarysearchtree;
echo "enter a number:";
$num=Dutility::getInt();
$first=$obj->factorial(2*$num);
echo $first."\n";
$second=$obj->factorial($num+1);
echo $second."\n";
$third=$obj->factorial($num);
echo $third."\n";
$formulae=floor($first/($second*$third));
echo  "the binary search of a tree is:".$formulae;