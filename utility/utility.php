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
    return $integer;
}
function getString()
{
    fscanf(STDIN,"%s",$string);
    return $string;
}
?>