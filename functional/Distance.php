<?php
include('../utility/utility.php');
echo "enter the value of x";
$x=getInt();
echo "enter the value of y";
$y=getInt();
$number=sqrt($x*$x+$y*$y);
echo $number;
?>