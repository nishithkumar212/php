<?php
/**
* File:Distance.php 
* Purpose:Distance.java that takes two integer command-line arguments x and y and prints the Euclidean distance from the point (x, y) to the origin (0, 0)
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/** including the file */
include('utility.php');
echo "enter the value of x:";

/** calling the method to get integer value */
$x=utility::getInt(); 
echo "enter the value of y:";

/**calling the method to get integer value */
$y=utility::getInt();

/**calling the function distance in utility file */
utility::distance($x,$y);
?>