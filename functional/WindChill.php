<?php
/**
* File:WindChill.php
* Purpose:program to calculate windchill
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/**including the utility file */
include('utility.php');
echo  "enter the temperature  value:";
/**function to take float values */
$t=utility::getFloat();
/** calling the function wind whic calculates  */ 
utility::wind($t);
?>