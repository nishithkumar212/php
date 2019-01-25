<?php
/**
* Purpose: program to print the calender of a specific month and year.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
$array1=array();
for($i=0;$i<6;$i++)
{
    for($j=0;$j<7;$j++)
    {
        $array1[$i][$j]=-1;
    }
}
echo " enter the month";
$month=Dutility::getInt();
echo " enter the year";
$year=Dutility::getInt();

$day=1;
$num=Dutility::calculateDayofWeek($day,$month,$year);
$months=array("jan","feb","mar","april","may","june","july","aug","sept","oct","nov","dec");
$days=array("31","28","31","30","31","30","31","31","30","31","30","31");
$bool=Dutility::leapyear($year);
if($bool==true)
{
    $days[1]=29;
}
for($i=$num;$i<7;$i++)
{
    $array1[0][$i]=$day++;
}
for($i=1;$i<6;$i++)
{
    for($j=0;$j<7;$j++)
    {
    
        $array1[$i][$j]=$day++;
    }

}
                        echo $months[$month-1]."\n";
echo "        sun    mon     tue     wed     thur     fri     sat";
echo ("\n");
for($i=0;$i<6;$i++)
{
    for($j=0;$j<7;$j++)
    {
        if($array1[$i][$j]==-1 ||$array1[$i][$j]>$days[$month-1])
        {
            echo "\t";
        }
        else if($array1[$i][$j]>0)
        {
            echo "\t".$array1[$i][$j]." ";
        }
    }
    echo "\n";
}
