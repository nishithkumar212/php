
<?php
/**
 * File:Main.php
 * Purpose: program that is used to call the static functions declared in utility class
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php');
echo "1.buublesortint 2.bubblesortstring 3.insertionsort 4.insertionsortstring";
$array1=array('12','24','2','34','26'); 
$array2=array("x","a","t","p","r");
Alutility::bubblesortfile($array1);
// echo "bubblesort int stopwatch time is:".$time;
Alutility::bubblesortStringfile($array2);
// echo "bubblesort string stopwatch time is:".$time;
Alutility::insertionsortfile($array1);
// echo "insertionsort int stopwatch time is:".$time;
Alutility::insertionsortstringfile($array2);
// echo "insertionsort string  stopwatch time is:".$time;
?>

