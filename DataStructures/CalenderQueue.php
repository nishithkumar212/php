<?php
/**
* Purpose: program to Create the Week Object having a list of WeekDay objects each storing the day (i.e S,M,T,W,Th,..) and the Date (1,2,3..) . The WeekDay objects are stored in a Queue implemented using Linked List
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
include('Queue.php');
$sub=new Queue;
$months=array("31","28","31","30","31","30","31","31","30","31","30","31");
echo " enter the month:";
$month=Dutility::getInt(); // function to retrieve integer
echo " enter the year";
$year=Dutility::getInt();
if(($month>=1&&$month<=12)&&($year>1000 &&$year<9999))
{
$bool=Dutility::leapyear($year); // function to check wheteher it is leap year or not
if($bool==true)
{
    $months[1]=29;
}
$day=1;
$dayof=Dutility::calculateDayofWeek($day,$month,$year); // function to calculate day of a week
for($i=1;$i<=$months[$month-1];$i++)
{
    $sub->enqueue($i);    //adding the elements in to the queue
}
echo "sun    mon    tue     wed     thu     fri     sat     \n";
for($i=0;$i<$dayof;$i++)
{
    echo "\t";
}
for($j=0;$j<$sub->size();$j++)
{
    $value=$sub->peek(); // taking the value from a queue
    echo  $sub->dequeue1()."\t"; // deleting the index of a queue
    if(($dayof+$value)%7==0) //condition to get in the next line
    {
        echo "\n";
    }
}
}
else
{
    echo "invalid input";
}
?>