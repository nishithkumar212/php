<?php
include('../utility/utility.php');
echo  "enter the number";
$number=getInt();
$harmonic=0.0;
for($index=1;$index<=$number;$index++)
{
    $harmonic=$harmonic+(1/$index);
}
echo $harmonic;
?>
