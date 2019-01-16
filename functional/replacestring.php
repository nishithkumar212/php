<?php
include('utility.php');
$String= " Hello <<UserName>>, How are you? ";
echo "enter the name to replace :";
$name=getString();
$String3=str_replace("<<UserName>>",$name,$String2);
 echo $String3;
?>
