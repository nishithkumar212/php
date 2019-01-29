<?php
/**
* File:CouponNumbers.php
* Purpose: program to generate coupon numbers which are distinct 
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/**including the utility file */
include('utility.php'); 
echo "enter a coupon number:";

/**calling the function to get integer input */
$number=utility::getInt();
/**calling the method couponnumbers in utility */
utility::couponNumber($number);
?>


