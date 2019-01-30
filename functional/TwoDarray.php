<?php
/**
* File:2Darray.php
* Purpose: or reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/**including the  utility file */
include('utility.php');
echo "enter the number of rows "."\n";
/** calling the function */
$rows=utility::getInt(); 
echo " enter the number of columns "."\n";
$columns=utility::getInt();
/** calling the TwoDarray function in utility file */
utility::TwoDarray($rows,$columns);
?>