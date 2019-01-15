<?php
echo "enter the stake value";
fscanf(STDIN,"%d",$stake);
echo $stake;
echo "enter the goal value";
fscanf(STDIN,"%d",$goal);
echo "enter the number of trials";
fscanf(STDIN,"%d",$trials);
$wins=0;
$bets=0;
for($index=1;$index<=trials;$index++)
{
    $cash=$stake;
while(cash>0 && cash<goal)
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
    echo $wins;
}
}
echo " the total number of wins  ".$wins.  " of trials "  .$trials;
?>