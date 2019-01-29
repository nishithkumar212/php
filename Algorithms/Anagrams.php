<?php
/**
 * File:Anagrams.php
 * Purpose: program to check that the given strings are anagrams or not
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include 'Alutility.php'; // including the file
echo "enter the  first string:";
/**calling the function to get string type of data */
$String1 = Alutility::getString(); 

echo "enter the second string:";
/** calling the function to get string type of data */
$String2 = Alutility::getString(); 

/**calling the function anagram to check whether it is anagram or not */
Alutility::anagram($String1, $String2);
?>