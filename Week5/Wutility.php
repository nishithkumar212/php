<?php
class Wutility
{
        /**
        * function to retrieve integer type of data.
        */
    public static function getInt()
    {
        /**
         *  validating the string is integer or not
         */
        fscanf(STDIN,"%s",$integer); 
          while (!is_numeric($integer) || $integer >(int) $integer )
        {
            echo "invalid input";
            fscanf(STDIN,"%s",$integer);
        }
        return $integer;
    } 
}