<?php
/**
* File:2Darray.php
* Purpose: or reading in 2D arrays of integers, doubles, or booleans from standard input and printing them out to standard output.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');//including the  utility file
echo "enter the number of rows "."\n";
$rows=utility::getInt(); // calling the function
echo " enter the number of columns "."\n";
$columns=utility::getInt();
utility::TwoDarray($rows,$columns); // calling the TwoDarray function in utility file
?>