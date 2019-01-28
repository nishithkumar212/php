<?php
class Dutility
{
// function to retrieve integer type of data.
    public static function getInt()
    {
        fscanf(STDIN,"%s",$integer); // validating the string is integer or not
          while (!is_numeric($integer) || $integer >(int) $integer )
        {
            echo "invalid input";
            fscanf(STDIN,"%s",$integer);
        }
        return $integer;
    }
    /**function to get the string values */
    public static function getString()
    {
        fscanf(STDIN,"%s",$str);
        while(is_numeric($str)) // validating the given string to check whether it is string or not
        {
            echo "invalid input try again";
            fscanf(STDIN,"%s",$stt);
        }
        return $str;
    }
    /**function to get the float values */
    public static function getFloat()
    {
        fscanf(STDIN,"%f",$float); 
        while(!is_float($float)) //validating the given input is float or not
        {
            echo "invalid input try again";
            fscanf(STDIN,"%f",$float);
        }
        return $float;
    }
//function to calculte the primes of a given number
    public static  function primes($number)
    {
        $i=0;
        $primes1=array(); // declaring an array
         for($indexi=1;$indexi<=$number;$indexi++) //iterating through the loop
         {
            $count=0;
            for($indexj=$indexi;$indexj>=1;$indexj--) 
            {
                if($indexi%$indexj == 0) // checking the condition of primenumber
                {
                    $count=$count+1;
                }
            }
            if( $count==2) //equating with 2
            {
                $primes1[$i]=$indexi;
                $i++;
            }
        }
         for($index=0;$index<sizeof($primes1);$index++)
         {
    
         }
         return $primes1; 
}
//function to check the primeanagrams.
public static function primeanagrams($prime)
{
    $str="";
    $k=0;
    $Array3=array();
    for($indexi=0;$indexi<sizeof($prime);$indexi++)
    {
        for($indexj=($indexi+1);$indexj<sizeof($prime);$indexj++)
        {
 
                $num=$prime[$indexj]; // storing in a number 
                $num1=$prime[$indexi]; // stroring in a number 
               $array2=str_split($num1); // splitting in to an array
               sort($array2);
               $rev1=implode("",$array2); // converting in to string 
               $array1=str_split($num);
                sort($array1); // sorting in to an array 
                $rev=implode("",$array1);
                if(sizeof($array1)==sizeof($array2)) // comparing the size of a array 
                {
                if($rev1==$rev)
                {
                    $str=$str.$prime[$indexi]." ";
                    //echo $prime[$indexi]." ";
                    //$Array3[$k]=$prime[$indexi];
                    //echo $Array3[$k]." ";
                    //  $k++;
                    //echo $prime[$indexj]." ";
                    $str=$str.$prime[$indexj]." ";
                   // $Array3[$k]=$prime[$indexj];
                }
                }   
        }  
    }
    return  $str;
}
// function to calculate the given year is leap year or not
public static function leapyear($year1)
{
    if (($year1 % 400 == 0) || ($year1 % 4 == 0)) // condition to know whether it is a leap year or not
    {
       // echo "entered year is a leap year";
        return true;
    } else {
        //echo "entered year is not a leap year " . "\n";
        return false;
    }
    
}
//function to calculate the day of a week
    public static function calculateDayofWeek($day,$month,$year)
{
//formula that is used for calculating the day of a week
        $y0 = floor($year -(14 - $month) / 12)+1;
        $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
        $m0 = ($month + 12 *floor ((14 - $month) / 12))-2;
        $d0 = floor($day + $x +floor(31*$m0 / 12))%7;
          return $d0;
}
}

