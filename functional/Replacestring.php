<?php
/**
* File:ReplaceString.php
* Purpose:program to replace the user input in a given string
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/ 
/**including the utility file */ 
include('utility.php');
$String= " Hello <<UserName>>, How are you? "; // string
echo $String."\n";
echo "enter the name to replace <<UserName>> :"."\n";
 /**calling the function to get integer input */
$name=utility::getString();
$String3=str_replace("<<UserName>>",$name,$String);
/** printing the output  */
 echo $String3; 
?>
