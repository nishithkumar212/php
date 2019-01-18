<?php
/**
* Purpose:Simulates a gambler who start with $stake and place fair $1 bets until he/she goes broke (i.e. has no money) or reach $goal.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  

include('utility.php'); // including the utility file
echo "enter the stake value :"; 
$stake=utility::getInt(); // calling the method to get integer value
echo "enter the goal value :";
$goal=utility::getInt(); // calling the method to get integer value
echo "enter the number of trials :";
$trials=utility::getInt();
utility::gambler($stake,$goal,$trials); // calling the funtion gambler which calculates the value present in
?>