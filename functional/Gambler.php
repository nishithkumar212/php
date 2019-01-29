<?php
/**
* File:Gambler.php
* Purpose:Simulates a gambler who start with $stake and place fair $1 bets until he/she goes broke (i.e. has no money) or reach $goal.
* @author Nishithkumar
* @version 1.0
* @since 15-01-2019
*
******************************************************************************/  
/** including the utility file */
include('utility.php'); 
echo "enter the stake value :";

/**calling the method to get integer value */ 
$stake=utility::getInt(); 
echo "enter the goal value :";

/** calling the method to get integer value */
$goal=utility::getInt(); 
echo "enter the number of trials :";
$trials=utility::getInt();

/**calling the funtion gambler which calculates the value present in */
utility::gambler($stake,$goal,$trials); 
?>