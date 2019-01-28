<?php
/**
* Purpose:Write a Program to calculate the minimum number of Notes as well as the Notes to be returned by the Vending Machine
* @author :Nishithkumar
* @version :1.0
* @since :15-01-2019
*
******************************************************************************/  
include('Alutility.php');
$array1=array('1000','500','100','50','20','10','5','1');
echo "enter the money value:";
$money=Alutility::getInt(); // calling the method
Alutility::vendingCalculate($array1,$money); // calling the method
?>