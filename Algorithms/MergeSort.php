<?php
/**
* File:mergesort.php
* Purpose:  program with Static Functions to do Merge Sort of list of Strings. 
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  
 include('Alutility.php');
 echo " enter the string:";
 $name=Alutility::getString();
 $input=str_split($name);
 $output = Alutility::mergeSort($input);
 echo "elements are \n";
 for($i=0;$i<sizeof($output);$i++)
{
    echo $output[$i] ." \n";
}
?>