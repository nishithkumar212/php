<?php
include('../utility/utility.php');
echo "enter a coupon number";
$number=getInt();
$myarray=array();
for($index=0;$index<$number;$index++)
{
    $value=rand(0,$number);
    $myarray[$index]=$value;
}
for($index=0;$index<sizeof($myarray);$index++)
{
    echo $myarray[$index];
}
$uniquearray=array_unique($myarray);
 for($index=0;$index<sizeof($uniquearray);$index++)
 {
     echo $uniquearray[$index]."\n";
 }
?>


