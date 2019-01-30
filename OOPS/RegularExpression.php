<?php
include('Outility.php');
$string="Hello <<name>>, We have your full name as <<full name>> in our system. your contact number is 91-xxxxxxxxxx. Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016. Use Regex to replace name, full name, Mobile#, and Date with proper value.
";
$arrayone=array("<{2}\w+>{2}","/<{2}\w+\s\w+>{2}/ ","/x{10}/ "," /\d+.\d.\d+/");
echo " enter your name:";
$name=Outility::getString();
echo " enter your full name:";
$fullname=Outility::getString();
echo  "enter your mobile number:";
$mobileno=Outility::getInt();
echo "enter the date :";
$Date=Outility::getInt();
$string1=preg_replace($arrayone[0],$name,$string);
$string2=preg_replace($arrayone[1],$fullname,$string1);
$string3=preg_replace($arrayone[2],$mobileno,$string2);
$string4=preg_replace($arrayone[3],$Date,$string3);
echo $string4;