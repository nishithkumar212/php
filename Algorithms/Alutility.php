<?php
class Alutility {
/**function to get the integer values */
public static function getInt()
{
    /** validating the string is integer or not */
    fscanf(STDIN,"%s",$integer); 
      while (!is_numeric($integer) || $integer >(int) $integer )
    {
        echo "invalid input";
        fscanf(STDIN,"%s",$integer);
    }
    /** returning the value. */
    return $integer;
}
/**function to get the string values */
public static function getString()
{
    fscanf(STDIN,"%s",$str);
    /** validating the given string to check whether it is string or not */
    while(is_numeric($str)) 
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
    /**validating the given input is float or not */ 
    while(!is_float($float)) 
    {
        echo "invalid input try again";
        fscanf(STDIN,"%f",$float);
    }
    return $float;
}
public static function boolean()
{
    fscanf(STDIN,"%s",$val);
    while($val!=='true'&& $val!=='false')
    {
        echo "invalid input \n";
        fscanf(STDIN,"%s",$val);
    }
    return $val;
}
/**function to check whether the given strings are anagrams or not to each other */
public static function anagram($String1,$String2)
{
    /**calculating the 1string len */
    $len1=strlen($String1); 
    /** calculating  the 2 string len */
    $len2=strlen($String2); 
    
    /** validating the lengths are equal or not */
    if($len1==$len2) 
    {
        /** splitting the string in to array */
        $array1=str_split($String1); 
        $array2=str_split($String2);
        /** sorting the array */
        sort($array1); 
        sort($array2);
        /**converting in to string */
        $string3=implode("",$array1); 
        $string4=implode("",$array2);
        /**checking  both are equal or not */
        if($string3==$string4) 
        {
            echo "given strings are anagram to each other"."\n";
        }
        else
        {
            echo "given stings are not anagrams"."\n";
        }
    }
    else{
        echo "given strings  are not anagrams:";
    }
    
}
/**function to calculate primnumbers  */
public static  function primes($number)
{
    $i=0;
    /** declaring an array */
    $primes1=array(); 
    /**iterating through the loop */
     for($indexi=1;$indexi<=$number;$indexi++) 
     {
        $count=0;
        for($indexj=$indexi;$indexj>=1;$indexj--) 
        {
    /**checking the condition of primenumber */
            if($indexi%$indexj == 0) 
            {
                /**incrementing the count value */
                $count=$count+1;
            }
        }
    /**equating with 2 */
        if( $count==2)
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
/** function to check whether it is palindrome or not */
public static function palindrome($primearray)
{
    $rev=0;
    $i=0;
    echo " the palindromes are:";
    for($indexi=0;$indexi<sizeof($primearray);$indexi++)
    {
        $num=$primearray[$indexi];
        // while($num>0)
        // {
        // $ld=$num%10;
        // $rev=$rev*10+$ld;
        // $num=$num/10;
        // }
        $rev = strrev("$num");
    
        if($num==$rev)
        {
          echo  $primearray[$indexi]."  ";
        }
    }
    // for($index=0;$index<sizeof($primes1);$index++)
    //  {
        
    //      echo $primes1[$index]." ,";
    //  }
}
//function to check the primeanagrams.
public static function primeanagrams($prime)
{
    echo " the prime anagrams are:";
    $i=0;
    for($indexi=0;$indexi<sizeof($prime);$indexi++)
    {
        for($indexj=$indexi+1;$indexj<sizeof($prime);$indexj++)
        {
 
                $num=$prime[$indexj];
                $num1=$prime[$indexi];
               $array2=str_split($num1);
               sort($array2);
               $rev1=implode("",$array2);
               $array1=str_split($num);
                sort($array1);
                $rev=implode("",$array1);
                if(sizeof($array1)==sizeof($array2))
                {
                if($rev1==$rev)
                {
                    echo $prime[$indexi]." ";
                    echo $prime[$indexj]." ";
                }
            }
        }
       
    }
}
/**function to calculate index of an given element by using binarysearch algorithm */
 public static function binarySearch($array1,$key)
{
$start=0;
$end=sizeof($array1)-1;
$mid=round($start+$end/2);
while($start<=$end)
{
    if($key==$array1[$mid])
    {
        echo "the element found at".$mid;
        break;
    }
    else if($key>$array1[$mid])
    {
        $start=$mid++;
    }
    else
    {
        $end=$mid--;
    }
}

}
/**function to calculate index of an given string by using binarysearch algorithm */
public static function binarySearchstring($Array1,$key)
{
    
    $start=0;
    $end=sizeof($Array1);
    while($start<=$end)
    {
        $mid=floor($start+($end-$start)/2);
        /**comaring the key element with mid index  */
        if(strcmp($Array1[$mid],$key) ==0) 
        {
            echo "the element found at index ".$mid;
            break;
        }
        /**comparing and key and if it is greater than the key incrementing the mid value */
        else if(strcmp($Array1[$mid],$key) < 0) 
        {
            $start=$mid+1;
        }
        /**comparing and key and if it is lesser than the key decrementing the mid value */
        else if(strcmp($Array1[$mid],$key) > 0)
        {
            $end=$mid-1;
        }
}
if($start>$end)
    { 
        echo " element not found";
    } 
}
/**function to calculate sorting of integers by using bubblesort algorithm */
public static function bubblesort($Array1)
{
    for($indexi=0;$indexi<sizeof($Array1)-1;$indexi++)
    {
        for($indexj=0;$indexj<sizeof($Array1)-1;$indexj++)
        {
//comaring the index value            
            if($Array1[$indexj]>$Array1[$indexj+1])
            {
                $temp=$Array1[$indexj];
                $Array1[$indexj]=$Array1[$indexj+1];
                $Array1[$indexj+1]=$temp;
            }
        }
    }
// after sorting the elements:The elements are printing through the loop
    echo "after sorting:";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]. " ";
    }
}
/**function to calculate sorting of strings by using bubblesort algorithm */
public static function bubblesortString($Array1)
{
    for($indexi=0;$indexi<sizeof($Array1-1);$indexi++)
    {
        for($indexj=0;$indexj<sizeof($Array1-1);$indexj++)
        {
            if(strcmp($Array1[$indexj],$Array1[$indexj+1])>0)
            {
                $temp=$Array1[$indexj];
                $Array1[$indexj]=$Array1[$indexj+1];
                $Array1[$indexj+1]=$temp;  
            }
        }
    }
    echo "after sorting:"."\n";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]." ";
    }
}
/**function to calculate sorting of integers by using insertionsort */
public static function insertionsort($Array1)
{
    for($indexi=1;$indexi<sizeof($Array1);$indexi++)
    {
	    		$key=$Array1[$indexi];
		    	$indexj=$indexi-1;
			while($indexj>=0&& $Array1[$indexj]>$key)
			{
                $Array1[$indexj+1]= $Array1[$indexj];
                $indexj--;
			}
			$Array1[$indexj+1]=$key;
    }
    echo "after sorting the elements are:";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi];
    }
}
/**function to calculate sorting of strings by using insertionsort */
public static function insertionsortstring($array1)
{
    for($i=1;$i<sizeof($array1);$i++)
    {
        $key=$array1[$i];
        $j=$i-1;
        while($j>=0) {
            if(strcmp($key,$array1[$j])>0)
            {
                break;
            }
            $array1[$j+1] = $array1[$j];
            $j--;
        }
        $array1[$j+1]=$key;
        echo "\n";
    }
    echo "after sorting the elements are:";
    for($indexi=0;$indexi<sizeof($array1);$indexi++)
    {
        echo $array1[$indexi]." ";
    }
}
public static function length($array1)
{
    $len=sizeof($array1);
    echo $len;
}
/**function to calculate the day name  */
public static function calculateDayofWeek($day,$month,$year)
{
//formula that is used for calculating the day of a week
        $y0 = floor($year -(14 - $month) / 12)+1;
        $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
        $m0 = ($month + 12 *floor ((14 - $month) / 12))-2;
        $d0 = floor($day + $x +floor(31*$m0 / 12))%7;
         $d0;
// depending on the value of d0 by using switch the day falls on certain day
        switch($d0)
        {
            case 0:echo "the day falls on sunday\n";
                    break;
            case 1:echo "the day falls on monday\n";
                    break;
            case 2:echo "the day falls on tuesday\n";
                    break;
            case 3:echo "the day falls on wednesday\n";
                    break;
            case 4:echo "the day falls on thursday\n";
                    break;
            case 5: echo "the day falls on friday\n";
                    break; 
            case 6: echo "the day falls on saturday\n";
                    break;
        }
}
/**function to calculate from celcius degree to  fahrenheit*/
public static function  fahreinconversion($celcius)
{
        $fahrenheit= ($celcius * 9/5) + 32; // conversion from celsius to fahrenheit
        echo " after conversion in to fahrenheit ".$fahrenheit;
}
/**function to calculate from fahrenheit degree to  celcius*/
public static function celciusconversion($fahrenheit)
{
        $celcius=($fahrenheit-32)* 5/9;//conversion from fahrenheit to celcius
        echo "after conversion in to celcius:". $celcius;
}
//function to calculate the rate of interest
public static function monthlypayment($P,$Y,$R)
{
    $n=12*$Y;
    $r=$R/(12*100);
    $power=1-pow(1+$r,-$n);
    $payment=$P*$r/$power;
    echo "the amount is:"."\n";
    echo $payment;
    echo "\n";
}
//function to calculate the how many notes you have
public static function vendingCalculate($array1,$money)
{
    $i=0;
//checking the condition while money is greater than 0 or not
    while($money>0)
 {
     while($money>=$array1[$i])
     {
         $notes=floor($money/$array1[$i]);
        echo $array1[$i]. "notes are:".$notes."\n";
        echo "\n";
        $money=floor($money%$array1[$i]);
        }
        $i++;// incrementing the i value
 }
}
//function used for conversion from decimal to binary
public static function  binary($number)
{
    $starttime=
    $array1=array();
    $i=0;
    while($number>0)
    {
    $array1[$i]=floor($number%2);
    $number=floor($number/2);
    $i++;
    }
    $reverse=array_reverse($array1);
    
    // for($j=0;$j<sizeof($reverse);$j++)
    // { 
    //     echo $reverse[$j];
    // }
    //echo "\n";
    return $reverse;
    //Alutility::decimal($reverse);
}
//function used binary to decimal
public static function decimal($array1)
{
    $decimal=0;
    $j=0;
  for($i=sizeof($array1)-1;$i>=0;$i--)
  {
      $power=pow(2,$j);
      $decimal=$decimal+$power*$array1[$i];
      $j++;
  }
  echo "the decimal value is:".$decimal;
}
//function used for binary search 
public static function binarySearchfile($array1,$key)
{
$start=$start_time = round(microtime(true) * 1000);
$end=sizeof($array1)-1;
$mid=round($start+$end/2);
while($start<=$end)
{
    if($key==$array1[$mid])
    {
        echo "the element found at".$mid;
        break;
    }
    else if($key>$array1[$mid])
    {
        $start=$mid++;
    }
    else
    {
        $end=$mid--;
    }
    $stop_time = round(microtime(true) * 1000);
    $elapsed=$stop_time-$start_time;
    return $elapsed;
}
}
// function binary search of a string that takes string as argument and find the index
public static function binarySearchstringfile($Array1,$key)
{
    $start=$start_time = round(microtime(true) * 1000);
    $start=0;
    $end=sizeof($Array1)-1;
 if($start>$end)
{ 
    echo " element not found";
} 
else
{

    while($start<=$end)
    {
        $mid=floor(($start+$end)/2);
        if(strcmp($Array1[$mid],$key) ==0)
        {
            echo "the element found at index ".$mid;
            break;
        }
        else if(strcmp($Array1[$mid],$key) < 0)
        {
            $start=$mid+1;
        }
        else if(strcmp($Array1[$mid],$key) > 0)
        {
            $end=$mid-1;
        }
    }
    $stop_time = round(microtime(true) * 1000);
    $elapsed=$stop_time-$start_time;
    return $elapsed;
}
}
// function used for sorting by using bubblesort
public static function bubblesortfile($Array1)
{
    $startpoint =(microtime(true) * 1000)."\n";
    for($indexi=0;$indexi<sizeof($Array1)-1;$indexi++)
    {
        for($indexj=0;$indexj<sizeof($Array1)-1;$indexj++)
        {
            if($Array1[$indexj]>$Array1[$indexj+1])
            {
                $temp=$Array1[$indexj];
                $Array1[$indexj]=$Array1[$indexj+1];
                $Array1[$indexj+1]=$temp;
            }
        }
    }
    echo "after sorting: \n";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]. " ";
    }
    $end_point = (microtime(true) * 1000);
    echo "\n";
    echo $end_point;
    // $result=($end_point-$startpoint);
    //  echo "the time is:".$result."\n";
}
// function used for sorting of a string by using bubblesort
public static function bubblesortStringfile($Array1)
{ 
    $start =floor(microtime(true) * 1000);
    for($indexi=0;$indexi<sizeof($Array1)-1;$indexi++)
    {
        for($indexj=0;$indexj<sizeof($Array1)-1;$indexj++)
        {
            if(strcmp($Array1[$indexj],$Array1[$indexj+1])>0)
            {
                $temp=$Array1[$indexj];
                $Array1[$indexj]=$Array1[$indexj+1];
                $Array1[$indexj+1]=$temp;  
            }
        }
    }
    echo "after sorting:"."\n";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]."  ";
    }
    $end = floor(microtime(true) * 1000);
    $res=floor($end-$start);
     echo  "the time is:".$res."\n";
}
// function used for sorting of an integers by using insertion sort
public static function insertionsortfile($Array1)
{ 
    $s = floor(microtime(true) * 1000);
    for($indexi=1;$indexi<sizeof($Array1);$indexi++)
    {
	    		$key=$Array1[$indexi];
		    	$indexj=$indexi-1;
			while($indexj>=0&& $Array1[$indexj]>$key)
			{
                $Array1[$indexj+1]= $Array1[$indexj];
                $indexj--;
			}
			$Array1[$indexj+1]=$key;
    }
    echo "after sorting the elements are:\n";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]."  ";
    }
    $e = floor(microtime(true) * 1000);
    $r=floor($e-$s);
    echo "the time is:".$r."\n";
}
/**function to calculate sorting of strings by using insertionsort */
public static function insertionsortstringfile($array1)
{ 
    $first = floor(microtime(true) * 1000);
    for($i=1;$i<sizeof($array1);$i++)
    {
        $key=$array1[$i];
        $j=$i-1;
        while($j>=0) {
            if(strcmp($key,$array1[$j])>0)
            {
                break;
            }
            $array1[$j+1] = $array1[$j];
            $j--;
        }
        $array1[$j+1]=$key;
        echo "\n";
    }
    echo "after sorting the elements are:\n";
    for($indexi=0;$indexi<sizeof($array1);$indexi++)
    {
        echo $array1[$indexi]."  ";
    }
    $second = floor(microtime(true) * 1000);
     $e=floor($second-$first);
     echo "the time is:".$e."\n";
}
//function to calculate the square root of a number
public static function squareroot($number)
{
	$t=$number;
	 $epsilon = 1e-15;
		while(abs($t -$number/$t)>$epsilon*$t)
		{
			$t=($number/$t+$t)/2;
        }
         echo $t;
}
// function to calculate the user given number by using binarysearch
public static function findnumber($array1,$key)
{
    $start=0;
    $end=sizeof($array1)-1;
    $mid=round($start+($end-$start)/2);
    while($start<=$end)
    {
            if($mid==$key)
            {
               echo "the element you searced is :".$array1[$mid-1];
               break;
            }
            else if($key>$mid)
            {
                $start=$mid++;
            }
            else if($key<$mid)
            {
                $end=$mid--;
            }
    }
    if($start>$end)
    {
        echo "the searched element is not present";
    }
}

public static function mergeSort($input)
{
$len = count($input);
/**if input size is 1 then return */
if (count($input) == 1) {
return $input;
}

/**calculate mid */
$mid = floor(count($input) / 2);
/**divide array into two halves until is size is 1 */
$left = array_slice($input, 0, $mid);
$right = array_slice($input, $mid, $len - 1);
$left = Alutility::mergeSort($left);
$right = Alutility::mergeSort($right);
/**merge sort the subarrays */
return Alutility::merge($left, $right);
}
/**function to find merge operation */
public static function merge($left, $right)
{
$res = array();
while (count($left) > 0 && count($right) > 0) {
if ($left[0] > $right[0]) {
$res[] = $right[0];
//The array_slice() function returns selected parts of an array.
//returns the values after index 1
$right = array_slice($right, 1);
} else {
$res[] = $left[0];
//returns the values after index 1
$left = array_slice($left, 1);
}
}
while (count($left) > 0) {
$res[] = $left[0];
$left = array_slice($left, 1);
}
while (count($right) > 0) {
$res[] = $right[0];
$right = array_slice($right, 1);
}
return $res;
}
}
?>
