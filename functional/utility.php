<?php
class utility
{
//function to calculate whether it is leap year or not
    public static function leapyear($year1)
    {
        if (($year1 % 400 == 0) || ($year1 % 4 == 0)) // condition to know whether it is a leap year or not
        {
            echo "entered year is a leap year";
        } else {
            echo "entered year is not a leap year " . "\n";
        }
    }
//function to retrieve int data
    public static function getInt()
    {
        fscanf(STDIN, "%s", $integer);
        while (!is_numeric($integer) || $integer >(int) $integer ) //validating whether it of int and if it is decimal and converting in to int and checking the condition the int value >1
        {
            echo "invalid input try again \n";
            fscanf(STDIN, "%s", $integer);
        }
        return $integer; // returning the integer value;
    }
//function to retrieve string data
    public static function getString()
    {
        fscanf(STDIN, "%s", $string);
        while (is_numeric($string)) // validating the given string to check whether it is string or not
        {
            echo "invalid input try again";
            fscanf(STDIN, "%s", $string);
        }
        return $string;
    }
//function to retrieve float data
    public static function getFloat()
    {
        fscanf(STDIN, "%f", $float); //validating the given input is float or not
        while (!is_float($float)) {
            echo "invalid input try again";
            fscanf(STDIN, "%f", $float);
        }
        return $float;
    }
//function to perform to take run time values and print in a 2D array
    public static function TwoDarray($rows, $columns)
    {
        $array1 = array();
        $count = $rows * $columns;
        echo "enter" . $count . "elements to insert in to an array" . "\n";
        for ($indexi = 0; $indexi < $rows; $indexi++) // loop that iterates the first dimension
        {
            for ($indexj = 0; $indexj < $columns; $indexj++) // loop that iterates the second dimension
            {
                $array1[$indexi][$indexj] = utility::getInt(); //takes the input from the user
            }
        }
        for ($indexk = 0; $indexk < sizeof($array1); $indexk++) {
            for ($indexl = 0; $indexl < sizeof($array1); $indexl++) {
                echo $array1[$indexk][$indexl] . " "; // printing the index values of an array
            }
            echo "\n";
        }
    }
//function to take the n distinct number and calculate distinct coupon numbers
    public static function couponNumber($number)
    {
        $distinct=0;
        $myarray = array(); // declaring an array
        for ($index = 0; $index < $number; $index++) {
            $value = rand(0, $number); // generating the random value
            $myarray[$index] = $value;
        }
        for ($index = 0; $index < sizeof($myarray); $index++) {
            echo $myarray[$index]." ";
        }
        echo "\n";
        $uniquearray = array_unique($myarray);
        $arr = array_values($uniquearray);
        echo " the distinct coupon numbers are: \n";
        for ($index = 0; $index < sizeof($arr); $index++) {
            echo $arr[$index] . "\n";
            $distinct++;
        }
        echo "the total distinct values are:".$distinct;
    }
// function that takes 2 parameters and find the distance from origin to the point
    public function distance($x, $y)
    {
        $number = sqrt($x * $x + $y * $y); //calculating the square root
        echo $number;
    }
//function to calculate the prime factors
    public static function primeFactors($number)
    {

        while ($number % 2 == 0) //firstly dividing the num by 2 until the loop terminates
        {
            echo "2";
            $number = $number / 2; // again the number is dividing by 2 to get quotient value
        }
        for ($index = 3; $index <= $number; $index = $index + 2) //iterates the loop with only prime numbers
        {
            while ($number % $index == 0) {
                echo $index . " ";
                echo "\n";
                $number = $number / $index; //dividing the number by index of prime value
            }
        }
    }
    // function to calculate the harmoic of a given number
    public static function harmonic($number)
    {
        $harmonic = 0.0;
        for ($index = 1; $index <= $number; $index++) {
            $harmonic = $harmonic + (1 / $index);

            echo "1"."/".$index ."+";
        }
        echo "\n";
        echo "the value is:".$harmonic;
    }
    // function to flip the coin and calculate percentage of heads and tails
    public static function flip($number)
    {
        $heads = 0;
        $tails = 0;
        for ($index = 0; $index < $number; $index++) {
            $random = rand(0, 1); //generating the random value between 0 and 1
            if ($random < 0.5) //checking the condition
            {
                $heads++;
            } else {
                $tails++;
            }
        }
        $percentheads = $heads / $number * 100; //calculation of percentage of heads
        $PERCENTTAILS = $tails / $number * 100; // calculation of percentage of tails
        echo "the percentage of heads is : " . $percentheads . "\n";
        echo "the percentage of tails is :" . $PERCENTTAILS . "\n";
    }
// function to play a gambler game and print the % of wins and loss
    public static function gambler($stake, $goal, $trials)
    {
        $wins = 0;
        $bets = 0;
        for ($index = 1; $index <= $trials; $index++) //iterating the loop from 1 to the no of trials user have entered
        {
            $cash = $stake; // assigning the user stake value to cash
            while ($cash > 0 && $cash < $goal) //checking the condition
            {
                $bets++;
                $value = rand(0, 1); // genearting the random value by using rand method between 0 and 1
                if ($value < 0.5) {
                    $cash = $cash + 1; //incrementing the cash value;
                } else {
                    $cash = $cash - 1; // decrementing the cash value;
                }
            }
            if ($cash == $goal) // comparing the cash and goal values
            {
                $wins = $wins + 1;

            }
        }
        echo " the total number of wins  " . $wins . " of trials " . $trials . "\n"; //printing the no of wins of trials
        echo "the percentage of wins is" . $wins / $trials * 100 . "\n";
    }
    static $start_time; // declaring the variables
    static $stop_time; // declaring the variables
    static $time_elapsed; // declaring the variables

    public static function start() //function to calculate when the user switch to start the time

    {
        global $start_time;
        $start_time = round(microtime(true) * 1000);

    }
    public static function stop() // function that calculates the time when the user stop the  watch

    {
        global $stop_time;
        $stop_time = round(microtime(true) * 1000);

    }
    public static function difference() // function that calculates the time difference between start and stop

    {
        global $start_time, $stop_time, $time_elapsed; //useage of global variables in function
        $time_elapsed = $stop_time - $start_time; // calculating the time difference between start and stop
        echo $time_elapsed . "in milliseconds \n";
    }
// function for calculating
    public static function stopWatch1()
    {
        echo " enter 1 to start the time :";
        $a = utility::getInt(); // to get the integer value
        if ($a == 1) {
            utility::start(); // calling the start method
        } else {
            echo "enter valid number" . "\n";
            utility::stopWatch1(); //calling the stopwatch
        }
        echo "enter 2 to stop the time :";
        $b = utility::getInt(); //to get the integer
        if ($b == 2) {
            utility::stop(); // calling the stop method
        } else {
            echo "invalid input";
            utility::stopWatch1();
        }
        echo " the time difference between start and stop is:" . "\n";
        utility::difference(); // calling the function
    }
    public static function triplets($number)
    {
        $array1 = array();

        echo " enter the " . $number . " elements for an array";
        echo "\n";
        for ($i = 0; $i < $number; $i++) {
            $array1[$i] = utility::getInt();
        }
        print_r($array1);
        for ($i = 0; $i < sizeof($array1); $i++) {
            for ($j = $i+1; $j < sizeof($array1); $j++) {
                for ($k = $j+1; $k < sizeof($array1); $k++) {
                    if (($array1[$i]+$array1[$j]+$array1[$k] )== 0) {
                        echo $array1[$i] . " " . $array1[$j] . " " . $array1[$k];
                    }
                }
            }
        }

    }
// function to calculate the windchill
    public static function wind($t)
    {
        if ($t < 50 && $t > 3) // checking the condition given
        {
            echo " enter the wind speed:";
            $v = utility::getFloat(); // to retrieve decimal value
            $windchill = 35.74 + 0.6215 * $t + (0.4275 * $t - 35.75) * (pow($v, 0.16));
            echo $windchill;
        } else {
            echo "the temperature should be les than 50 and greater than 3";
        }
    }
//function to calculate the poweroftwo by the given number
    public static function powersoftwo($number)
    {
        for ($index = 1; $index <= $number; $index++) {
            echo (pow(2, $index) . "\n"); // calcuating the power value
        }
    }
// function to calculate the roots of an equation
    public static function roots($a, $b, $c)
    {
        $Delta = ($b * $b) - (4 * $a * $c); //calculation of delta value
        $root1 = (-$b + sqrt($Delta)) / 2 * $a; // calculation to find the first root
        $root2 = (-$b - sqrt($Delta)) / 2 * $a; // calculation to find the second root
        echo " the roots are " . "\n";
        echo $root1 . "\n"; //printing the first root
        echo $root2 . "\n"; // printing the second root
    }
    /**string permutation */
public static function stringPermutation($str){
    echo "permution words are \n";
    Utility::permuation("",$str); 
    }
    
    public static function permuation($perm,$word){
    if(empty($word)){
    echo $perm.$word."\n";
    }else{
    for($i=0;$i<strlen($word);$i++){
    Utility::permuation($perm.$word{$i},substr($word,0,$i).substr($word,$i+1,strlen($word)));
    }
    }
    }
}
?>