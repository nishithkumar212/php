<?php
include('Dutility.php');
include('LinkedList.php');
include('Stack2.php');
echo " enter the month";
$month=Dutility::getInt();
echo " enter the year";
$year=Dutility::getInt();
$obj=new Stack;
$day=1;
$dayof=Dutility::calculateDayofWeek($day,$month,$year);
$months=array("jan","feb","mar","april","may","june","july","aug","sept","oct","nov","dec");
$days=array("31","28","31","30","31","30","31","31","30","31","30","31");
    /**function to check wheteher it is leap year or not */
$bool=Dutility::leapyear($year);
$arr1=array();
if($bool==true)
{
    $days[1]=29;
}
for($i=1;$i<=$days[$month-1];$i++)
{
    $obj->push($i);
}
for($i=1;$i<=$days[$month-1];$i++)
{
    $value=$obj->pop();
    $arr1[$i]=$value;
}
for($i=1;$i<=$days[$month-1];$i++)
{
    $obj->push($arr1[$i]);
}
// for($i=0;$i<$obj->size();$i++)
// {
//     $value1=$obj->pop();
//     $arr2[$i]=$value1;
// }
echo "sun    mon    tue     wed     thu     fri     sat     \n";
for($i=0;$i<$dayof;$i++)
{
    echo "\t";
}
for($j=1;$j<=$days[$month-1];$j++)
{
    /** taking the value from a stack */
    $value3=$obj->peek(); 

    /** deleting the index value from stack*/
    echo  $obj->pop()."\t"; 
    /**condition to get in the next line */
    if(($dayof+$value3)%7==0) 
    {
        echo "\n";
    }
}

