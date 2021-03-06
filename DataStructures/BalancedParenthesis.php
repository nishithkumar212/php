<?php
/**
* Purpose:Take an Arithmetic Expression such as (5+6)∗(7+8)/(4+3)(5+6)∗(7+8)/(4+3) where parentheses are used to order the performance of operations. Ensure parentheses must appear in a balanced fashion.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
include('Stack.php');
$str="(((5+6))";
$array1=str_split($str);
$obj=new Stack;
$count=0;
/**
 *  function used for adding the elements in the queue
 */
for($i=0;$i<sizeof($array1);$i++)
{
    if($array1[$i]=="(")
    {
        $obj->push($array1[$i]);
    }

/**
*  function used for poping the elements in to the stack
*/
    else if($array1[$i]==")")
    {
        $obj->pop();// poping the elemnt in to the stack
    
    }
}

/**
*  function used for checking the condition.
*/
if($obj->isEmpty()) 
    {
    echo "true \n";
    }
else
    {
echo "false \n"; 
    }
?>