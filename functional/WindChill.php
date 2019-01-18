<?php
/**
* Purpose:program to calculate windchill
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');//including the utility file
echo  "enter the temperature  value:";
$t=utility::getFloat(); //function to take float values
utility::wind($t);// calling the function wind whic calculates 
?>