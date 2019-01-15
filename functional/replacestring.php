<?php
include('../utility/utility.php');
$String= " Hello <<UserName>>, How are you? ";
$String1=str_replace("<<","",$String);
 $String2=str_replace(">>","",$String1);
echo "enter the name to replace :";
$name=getString();
$String3=str_replace("UserName",$name,$String2);
 echo $String3;
?>
