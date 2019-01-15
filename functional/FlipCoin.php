<?php
echo "enter the number of times to flip the coin  :";
fscanf(STDIN,"%d",$number);
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
?>
