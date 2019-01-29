<?php
/**
* File:Stringpermutation.php
* Purpose: program to calculate the permutation of a string.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
include('utility.php');
echo " enter the string:";
$str=utility::getString();
utility::stringPermutation($str);
?>
