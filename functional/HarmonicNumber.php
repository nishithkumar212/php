<?php
/**
* Purpose:prints the harmonic of a given number.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php'); // including the utility file
echo  "enter the number:";
$number=utility::getInt(); //// calling the method to get integer
if($number==0)
{
    echo " number should be greater than zero";
}
else{
    utility::harmonic($number);// calling the function harmonic 
}

?>
