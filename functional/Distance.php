<?php
/**
* Purpose:Distance.java that takes two integer command-line arguments x and y and prints the Euclidean distance from the point (x, y) to the origin (0, 0)
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');// including the file
echo "enter the value of x:";
$x=utility::getInt(); // calling the method to get integer value
echo "enter the value of y:";
$y=utility::getInt(); //calling the method to get integer value
utility::distance($x,$y);// calling the function distance in utility file
?>