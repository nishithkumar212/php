<?php
/**
* Purpose:program to replace the user input in a given string
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php');// including the utility file
$String= " Hello <<UserName>>, How are you? "; // string
echo $String."\n";
echo "enter the name to replace <<UserName>> :"."\n";
$name=utility::getString();//calling the function to get integer input
$String3=str_replace("<<UserName>>",$name,$String);
 echo $String3; // printing the output 
?>
