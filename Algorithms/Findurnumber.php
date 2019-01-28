 <?php
 /**
 * Purpose: program to find the user given number by using binarysearch 
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
//  include('Alutility.php');
// echo " enter a number:";
// $num=Alutility::getInt();
// $result=pow(2,$num);
// $array1=array();
// $j=1;
// for($i=0;$i<$result;$i++)
// {
//     $array1[$i]=$j;
//     $j++;
// }
// for($i=0;$i<sizeof($array1);$i++)
// {
//     echo $array1[$i]."  ";
// } 
// echo "\n";
// echo "enter the element to search:";
// $search=Alutility::getInt();
// $number=Alutility::findnumber($array1,$search); /** function to find the number given by user*/
// ?>

<?php
include("Alutility.php");
class findNumber
{
/**
* function to guess the no given by user in 2^n times
*/
function search(){
$low = 0 ;
$high = 10;
for($i = 0 ;$i < 10 ;$i++){
while($low<=$high){
$mid = round(($low + $high)/2);
echo "If your no is bw ".$low." and ".$mid." press 1\n";
echo "If your no is bw ".$mid." and ".$high." press 2\n";
//get user no for choice
$s=Alutility::getInt();
/**
* user enters 2 and 1 according to output
*/

//if low is high then the no is found
if($high == $mid){
echo "your no is ".$high;
return $high ;
}
else if($s!=1){
$low = $mid;
}
else{
$high = $mid;
}
}
} 
}
}
findnumber::search();
?>
