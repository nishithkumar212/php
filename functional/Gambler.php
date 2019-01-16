<?php
include('../functional/utility.php');
echo "enter the stake value :";
$stake=getInt();
echo "enter the goal value :";
$goal=getInt();
echo "enter the number of trials :";
$trials=getInt();
gambler($stake,$goal,$trials);
?>