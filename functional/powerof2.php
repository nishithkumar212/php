<?php
include('../utility/utility.php');
echo "enter the number ";
$number=getInt();
for($index=1;$index<=$number;$index++)
{
    echo (pow(2,$index)."\n");
}
?>