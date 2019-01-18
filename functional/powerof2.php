<?php
/**
* Purpose:program to calculates the power of 2.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

    include('utility.php'); // including the file
    echo "enter the number: ";
    $number=utility::getInt(); // calling the function to get integer 
    utility::powersoftwo($number); // calling the function to calculate the powers of 2 of a given number
?>