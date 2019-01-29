<?php
/**
*File:FlipCoin.php
* Purpose:program to flip the coin and clculate the percentage of heads and tails
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');
echo "enter the number of times to flip the coin  :";
/** calling the method to get integer */
$number=utility::getInt();
/** checking the condition */
if($number<1) 
{
    echo "you should toss atleast once"."\n";
}
else{
    /** calling the function flip in utility file */
    utility::flip($number); 
}
?>
