<?php
include('utility.php');
class Tictae
{ 
    static $count=0;
    static  $array1=array();
    public static function display()
    {
        for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                $array1[$i][$j]=="-";
            }
        }
    }
public static function display1()
{
    for($i=0;$i<3;$i++)
        {
            for($j=0;$j<3;$j++)
            {
                echo $array1[$i][$j]." ";
            }
        }
}
public static function computer()
{
    $crow=floor(rand(0,2));
    $ccol=floor(rand(0,2));
    if($array1[$crow][$ccol]=="-")
        {
        $array1[$crow][$ccol]="x"; 
        $count++;
        }
    else{
       Tictae::computer();
        }
}
public static function cwin()
{
    if(($array1[0][0]=="x"&&$array1[0][1]=="x"&&$array1[0][2]=="x")||($array1[1][0]=="x"&&$array1[1][1]=="x"&&$array1[1][2]=="x")||($array1[2][0]=="x"&&$array1[2][1]=="x"&&$array1[2][2]=="x")||($array1[0][0]=="x"&&$array1[1][0]=="x"&&$array1[2][0]=="x")||($array1[0][1]=="x"&&$array1[1][1]=="x"&&$array1[2][1]=="x")||($array1[0][2]=="x"&&$array1[1][2]=="x"||$array1[2][2]=="x")||($array1[0][0]=="x"||$array1[1][1]=="x"||$array1[2][2]=="x")||($array1[0][2]=="x"||$array1[1][1]=="x"||$array1[2][1]=="x"))
        {
            echo " computer wins";
            exit();
        }
}
public static function user()
{
    echo "enter the row from 0-2";
    $urow=utility::getInt();
    echo "enter the column from 0-2";
    $ucol=utility::getInt();
    if($array1[$urow][$ucol]=="-")
    {
        $array1[$urow][$ucol]="0";
    }
    else{
       Tictae::user();
    }   
    $count++;
}
public static function uwin(){
    if(($array1[0][0]=="0"&&$array1[0][1]=="0"&&$array1[0][2]=="0")||($array1[1][0]=="0"&&
    $array1[1][1]=="0"&&$array1[1][2]=="0")||($array1[2][0]=="0"&&$array1[2][1]=="0"&&$array1[2][2]=="0")
    ||($array1[0][0]=="0"&&$array1[1][0]=="0"&&$array1[2][0]=="0")||($array1[0][1]=="0"
    &&$array1[1][1]=="0"&&$array1[2][1]=="0")||($array1[0][2]=="0"&&$array1[1][2]=="0"
    ||$array1[2][2]=="0")||($array1[0][0]=="0"||$array1[1][1]=="0"||$array1[2][2]=="0")
    ||($array1[0][2]=="0"||$array1[1][1]=="0"||$array1[2][1]=="0"))
        {
            echo "use wins";
            exit();
        }
    }
}

$obj = new Tictae;
while($count<9)
{
    $obj->display();
    echo " its time for computer";
    $obj->computer();
    $obj->display1();
    $obj->cwin();
    $obj->user();
    $obj->display1();
    $obj->uwin();
}
     ?>


