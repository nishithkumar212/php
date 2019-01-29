<?php
/**
* File:Harmonic.php
* Purpose:prints the harmonic of a given number.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/** including the utility file */
include('utility.php'); 
echo  "enter the number:";
/** calling the method to get integer */
$number=utility::getInt(); 
if($number==0)
{
    echo " number should be greater than zero";
}
else
{
    /** calling the function harmonic  */
    utility::harmonic($number);
}

?>
