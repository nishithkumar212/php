<?php
echo "enter the number";
fscanf(STDIN,"%d",$number);
while($number%2==0)
{
    echo  "2";
    $number=$number/2;
}
for($index=3;$index<=$number;$index=$index+2)
{
 if($number%$index==0)
 {
     echo $index;
 }
$number=$number/$index;
}
?>