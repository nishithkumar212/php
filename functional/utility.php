<?php
function leapyear($year1)
{
    if(($year1%100==0||$year1%400==0) && ($year1%4==0))
    {
        echo "entered year is a leap year";
    }else{
        echo "entered year is not a leap year "."\n";
    }
}
function getInt()
{
    fscanf(STDIN,"%d",$integer);
    while(!is_numeric($integer))
    {
        echo "invalid input try again";
        fscanf(STDIN,"%d",$integer);
    }
    return $integer;
}
function getString()
{
    fscanf(STDIN,"%s",$string);
    while(!is_String($string))
    {
        echo "invalid input try again";
        fscanf(STDIN,"%s",$string);
    }
    return $string;
}
function getFloat()
{
    fscanf(STDIN,"%f",$float);
    while(!is_Float($float))
    {
        echo "invalid input try again";
        fscanf(STDIN,"%d",$float);
    }
    return $float;
}
function TwoDarray($rows,$columns)
{
    $array1=array();
    for($indexi=0;$indexi<$rows;$indexi++)
{
    for($indexj=0;$indexj<$columns;$indexj++)
    {
        $array1[$indexi][$indexj]=getInt();
    }
}
for($indexk=0;$indexk<sizeof($array1);$indexk++)
{
    for($indexl=0;$indexl<sizeof($array1);$indexl++)
    {
        echo $array1[$indexk][$indexl] ." ";
    }
    echo "\n";
}
}
function couponNumber($number)
{
    $myarray=array();
for($index=0;$index<$number;$index++)
{
    $value=rand(0,$number);
    $myarray[$index]=$value;
}
for($index=0;$index<sizeof($myarray);$index++)
{

}
    $uniquearray=array_unique($myarray);
    $arr = array_values($uniquearray);
    for($index=0;$index<sizeof($arr);$index++)
    {
     echo $arr[$index]."\n";
    }
}
function distance($x,$y)
{
    $number=sqrt($x*$x+$y*$y);
    echo $number;
}
function primeFactors($number)
{
   
    while($number%2==0)
    {
    echo  "2";
    $number=$number/2;
    }
for($index=3;$index<=$number;$index=$index+2)
    {
        while($number%$index==0)
        {
            echo $index;
            $number=$number/$index;
        }
    }
    }
function flip($number)
{
    $heads=0;
    $tails=0;
    for($index=0;$index<$number;$index++)
    {
        $random=rand(0,1);
        if($random<0.5)
        {
            $heads++;
        }
        else{
            $tails++;
        }
    }
    $percentheads=$heads/$number*100;
    $PERCENTTAILS=$tails/$number*100;
    echo "the percentage of heads is : ".$percentheads."\n";
    echo "the percentage of tails is :".$PERCENTTAILS."\n";
}
function gambler($stake,$goal,$trials)
{
    $wins=0;
    $bets=0;
for($index=1;$index<=$trials;$index++)
{
    $cash=$stake;
    while($cash>0 && $cash<$goal)
{
    $bets++;
    $value=rand(0,1);
    if($value< 0.5)
    {
        $cash=$cash+1;
    }
    else
    {
        $cash=$cash-1;
    }
}
if($cash==$goal)
    {
    $wins=$wins+1;

    }
}
echo " the total number of wins  ".$wins.  " of trials "  .$trials."\n";
}
    static  $start_time;
    static $stop_time;
    static $time_elapsed;

function start()
{
    global $start_time;
    $start_time=round(microtime(true) * 1000);
    echo $start_time." \n";
}  
function stop()
{
    global $stop_time;
    $stop_time=round(microtime(true) * 1000);
    echo $stop_time."\n";
}
function difference()
{
    global $start_time, $stop_time,$time_elapsed;
    $time_elapsed=$stop_time-$start_time;
    echo $time_elapsed."in milliseconds \n";
}
function stopWatch1()
{
    echo " enter 1 to start the time :" ;
    $a=getInt();
    start();
    echo "enter 2 to stop the time :";
    $b=getInt();
    stop();
    echo " the time difference between start and stop is:"."\n";
    difference();
}
function wind($t)
{
    if($t<50&&$t>3)
{
    echo " enter the wind speed:";
    $v=getFloat();
    $windchill=35.74+0.6215*$t+(0.4275*$t-35.75)*(pow($v, 0.16));
    echo $windchill;
}
else
{
    echo "the temperature should be les than 50 and greater than 3";
}
}
function powersoftwo($number)
{
    for($index=1;$index<=$number;$index++)
    {
        echo (pow(2,$index)."\n");
    }
}
function roots($a,$b,$c)
{
    $Delta=($b*$b)-(4*$a*$c);
    $root1=(-$b+sqrt($Delta))/2*$a;
    $root2=(-$b-sqrt($Delta))/2*$a;
    echo " the roots are "."\n";
    echo $root1."\n";
    echo $root2."\n";
}
?>
