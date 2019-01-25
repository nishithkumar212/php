<?php
include('Dutility.php');
include('Queue.php');
$sub=new Queue;
$months=array("31","28","31","30","31","30","31","31","30","31","30","31");
echo " enter the month:";
$month=Dutility::getInt();
echo " enter the year";
$year=Dutility::getInt();
$bool=Dutility::leapyear($year);
if($bool==true)
{
    $months[1]=29;
}
$day=1;
$dayof=Dutility::calculateDayofWeek($day,$month,$year);
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
    $value=$sub->peek();
    echo  $sub->dequeue1()."\t";
    if(($dayof+$value)%7==0)
    {
        echo "\n";
    }
}

?>