<?php
class Tictae{
include('../utility/utility.php');
$array1=array();
for($indexi=0;$indexi<3;$indexi++)
{
    for($indexj=0;$indexj<3;$indexj++)
    {
        $array1[$indexi][$indexj]="-";
    }
}
function display()
{
for($indexi=0;$indexi<3;$indexi++)
{
    for($indexj=0;$indexj<3;$indexj++)
    {
        echo $array1[$indexi][$indexj];
    }
    echo "\n";
}
}
function computer()
{
    $crow=rand(0,2);
    $ccol=rand(0,2);
    if($array1[$crow][$ccol]=="-")
    {
        $array1[$crow][$ccol]=="x";
    }
    else
    {
        computer();
    }
    $count++;

}
function user()
{
    echo "enter the row no from 0-2";
    $urow=getString();
    echo "enter the column no from 0-2";
    if($array1[$urow][$ucol]=="-")
    {
        $array1[$crow][$ccol]=="0";
    }
    else
    {
        user();
    }
    $count++;
}
function cwin()
{
    if(($array1[$indexi][$indexj]==''&&arr[0][1]=='x'&&arr[0][2]=='x')||(arr[1][0]=='x'&&arr[1][1]=='x'&&arr[1][2]=='x')||(arr[2][0]=='x'&&arr[2][1]=='x'&&arr[2][2]=='x')||(arr[0][0]=='x'&&arr[1][0]=='x'&&arr[2][0]=='x')||(arr[0][0]=='x'&&arr[1][0]=='x'&&arr[2][0]=='x')||(arr[0][1]=='x'&&arr[1][1]=='x'&&arr[2][1]=='x')||(arr[0][2]=='x'&&arr[1][2]=='x'&&arr[2][2]=='x')||(arr[0][0]=='x'&&arr[1][1]=='x'&&arr[2][2]=='x')||(arr[0][2]=='x'&&arr[1][1]=='x'&&arr[2][0]=='x'))
}
}
obj=new Tictae;
obj->computer();

}


?>