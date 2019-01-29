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
/**
 *  function to retrieve integer
 */
$month=Dutility::getInt(); 
echo " enter the year";
$year=Dutility::getInt();
if(($month>=1&&$month<=12)&&($year>1000 &&$year<9999))
{
    /**
     *  function to check wheteher it is leap year or not
     */
$bool=Dutility::leapyear($year); 
if($bool==true)
{
    $months[1]=29;
}
$day=1;

    /**
    *  function to calculate day of a week
    */
$dayof=Dutility::calculateDayofWeek($day,$month,$year); 

    /**
     * adding the elements in to the queue
     */
for($i=1;$i<=$months[$month-1];$i++)
{
    $sub->enqueue($i);    
}
echo "sun    mon    tue     wed     thu     fri     sat     \n";
for($i=0;$i<$dayof;$i++)
{
    echo "\t";
}
for($j=0;$j<$sub->size();$j++)
{
    /**
     * // taking the value from a queue
     */
    $value=$sub->peek(); 
    /**
     * deleting the index of a queue
     */
    echo  $sub->dequeue1()."\t"; 
    /**
     * condition to get in the next line
     */
    if(($dayof+$value)%7==0) 
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