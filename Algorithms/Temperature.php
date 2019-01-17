<?php
include('Alutility.php');
echo "1.celsius to fahrenheit"."\n";
echo "2 .fahrenheit to celcius"."\n";
echo " enter the number:";
$num=Alutility::getInt();
switch($num)
{
    case 1:        echo "enter the celsius degree"."\n";
                        $a=Alutility::getFloat();
                        Alutility::fahreinconversion($a);
                        break;
    case 2:         echo "enter the fahrenheit degree"."\n";
                        $b=Alutility::getFloat();
                        Alutility::celciusconversion($b);
                        break;

}
?>