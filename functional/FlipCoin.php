<?php
/**
* Purpose:program to flip the coin and clculate the percentage of heads and tails
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');//include('utility.php'); 
echo "enter the number of times to flip the coin  :";
$number=utility::getInt(); // calling the method to get integer
if($number<1) // checking the condition
{
    echo "you should toss atleast once"."\n";
}
else{
    utility::flip($number); // calling the function flip in utility file
}
?>
