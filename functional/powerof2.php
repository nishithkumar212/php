<?php
/**
* File:powerof2.php
* Purpose:program to calculates the power of 2.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
    /** including the file */
    include('utility.php'); 
    echo "enter the number: ";
    /** calling the function to get integer  */
    $number=utility::getInt(); 
    /** calling the function to calculate the powers of 2 of a given number */
    utility::powersoftwo($number); 
?>