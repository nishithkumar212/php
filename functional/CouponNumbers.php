<?php
/**
* Purpose: program to generate coupon numbers which are distinct 
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php'); //including the utility file
echo "enter a coupon number:";
$number=utility::getInt();// calling the function to get integer input
utility::couponNumber($number);// calling the method couponnumbers in utility
?>


