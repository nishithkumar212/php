<?php
class Outility
{
 public static function getInt()
    {
        fscanf(STDIN, "%s", $integer);
        /**validating whether it of int and if it is decimal and converting in to int and checking the condition the int value >1 */
        while (!is_numeric($integer) || $integer >(int) $integer ) 
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
}
