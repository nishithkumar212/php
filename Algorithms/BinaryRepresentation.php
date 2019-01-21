<?php
include('Alutility.php');
echo "enter the decimal value:";
$number=Alutility::getInt();
$arr=Alutility::binary($number);
for($j=0;$j<sizeof($arr);$j++)
    { 
        echo $arr[$j];
    }
    echo "\n";
    Alutility::decimal($arr);
?>
