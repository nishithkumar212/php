<?php
/**
* File:Tictae.php
* Purpose: program to play the tictae .
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
******************************************************************************/  
include('utility.php');
 function display($darr)
    {
        $farr=$darr;
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                $farr[$i][$j]= "-1";
            }
        }
        return $farr;
    }

 function display1($dis)
{
    $dis2=$dis;
    for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $dis2[$i][$j]." ";
            }
            echo "\n";
        }
        return $dis2;
}
 function computer($arr)
{
    $carray=$arr;
    global $count;
    $crow=rand(0,2);
    $ccol=rand(0,2);
    if($carray[$crow][$ccol] == "-1")
        {
        $carray[$crow][$ccol]="x"; 
        }
    else
    {
     computer($carray);
    }
    $count++;
    return $carray;
}
 function cwin($arrays)
{
$array1=$arrays;
    if(($array1[0][0]=="x"&&$array1[0][1]=="x"&&$array1[0][2]=="x")||($array1[1][0]=="x"&&$array1[1][1]=="x"&&$array1[1][2]=="x")||($array1[2][0]=="x"&&$array1[2][1]=="x"&&$array1[2][2]=="x")||($array1[0][0]=="x"&&$array1[1][0]=="x"&&$array1[2][0]=="x")||($array1[0][1]=="x"&&$array1[1][1]=="x"&&$array1[2][1]=="x")||($array1[0][2]=="x"&&$array1[1][2]=="x"||$array1[2][2]=="x")||($array1[0][0]=="x"||$array1[1][1]=="x"||$array1[2][2]=="x")||($array1[0][2]=="x"||$array1[1][1]=="x"||$array1[2][1]=="x"))
        {
            echo " computer wins";
            exit();
        }
}
 function user($carr)
{
    $uarray=$carr;
    global $count;
    echo "enter the row from 0-2:";
    $urow=utility::getInt();
    echo "enter the column from 0-2:";
    $ucol=utility::getInt();
    if($uarray[$urow][$ucol] == -1)
    {
        $uarray[$urow][$ucol]="0";
    }
    else{
       user($uarray);
    }   
    $count++;
    return $uarray;
}
function uwin($userarr)
{
        $array1=$usearr;
    if(($array1[0][0]=="0"&&$array1[0][1]=="0"&&$array1[0][2]=="0")||($array1[1][0]=="0"&&
    $array1[1][1]=="0"&&$array1[1][2]=="0")||($array1[2][0]=="0"&&$array1[2][1]=="0"&&$array1[2][2]=="0")
    ||($array1[0][0]=="0"&&$array1[1][0]=="0"&&$array1[2][0]=="0")||($array1[0][1]=="0"
    &&$array1[1][1]=="0"&&$array1[2][1]=="0")||($array1[0][2]=="0"&&$array1[1][2]=="0"
    ||$array1[2][2]=="0")||($array1[0][0]=="0"||$array1[1][1]=="0"||$array1[2][2]=="0")
    ||($array1[0][2]=="0"||$array1[1][1]=="0"||$array1[2][1]=="0"))
        {
            echo "user wins";
            exit();
        }
    }
$count=1;
$array1=array();
$disarr=display($array1);
while($count<9)
{
    if($count==1)
    {
    echo " its time for computer";
    echo "\n";
    $comarray=computer($disarr);
    $rrr=display1($comarray);
    $arry=user($rrr);
    }
   if($count>1)
   {
    $comarray=computer($arry);
    $rrr=display1($comarray);
    //cwin($array1);
    $arry=user($rrr);
    $ar=display1($arry);
    uwin($array1);
   }
}
     ?>


