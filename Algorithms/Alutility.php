<?php
class Alutility {
/**function to get the integer values */
public static function getInt()
{
    fscanf(STDIN,"%s",$integer);
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
    fscanf(STDIN,"%s",$string);
    while(is_numeric($string)) // validating the given string to check whether it is string or not
    {
        echo "invalid input try again";
        fscanf(STDIN,"%s",$string);
    }
    return $string;
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
/**function to check whether the given strings are anagrams or not to each other */
public static function anagram($String1,$String2)
{
    $len1=strlen($String1); //calculating the 1string len
    $len2=strlen($String2); // calculating  the 2 string len

    if($len1==$len2) // validating the lengths are equal or not
    {
        $array1=str_split($String1); // splitting the string in to array
        $array2=str_split($String2);
        sort($array1); // sorting the array
        sort($array2);
        $string3=implode("",$array1); //converting in to string
        $string4=implode("",$array2);
        if($string3==$string4) // converting both are equal or not
        {
            echo "given strings are anagram to each other"."\n";
        }
        else
        {
            echo "given stings are not anagrams"."\n";
        }
    }
    echo "both are not anagrams"."\n";
}
/**function to calculate primnumbers  */
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
public static function primeanagrams($prime)
{
    echo " the prime anagrams are:";
    $i=0;
    for($indexi=0;$indexi<sizeof($prime);$indexi++)
    {
        for($indexj=$indexi+1;$indexj<sizeof($prime);$indexj++)
        {
               $num=$prime[$indexj];
               $array1=str_split("$num");
                sort($array1);
                $rev=implode("",$array1);
                if($prime[$indexi]==$rev)
                {
                    echo $prime[$indexi]." ";
                    echo $prime[$indexj]." ";
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
}
}
/**function to calculate sorting of integers by using bubblesort algorithm */
public static function bubblesort($Array1)
{
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
        $y0 = floor($year -(14 - $month) / 12)+1;
        $x = floor($y0 + $y0/4 - $y0/100 + $y0/400);
        $m0 = ($month + 12 *floor ((14 - $month) / 12))-2;
        $d0 = floor($day + $x +floor(31*$m0 / 12))%7;
         $d0;
        
        switch($d0)
        {
            case 0:echo "the day falls on sunday";
                    break;
            case 1:echo "the day falls on monday";
                    break;
            case 2:echo "the day falls on tuesday";
                    break;
            case 3:echo "the day falls on wednesday";
                    break;
            case 4:echo "the day falls on thursday";
                    break;
            case 5: echo "the day falls on friday";
                    break; 
            case 6: echo "the day falls on saturday";
                    break;
        }
}
/**function to calculate from celcius degree to  fahrenheit*/
public static function  fahreinconversion($celcius)
{
        $fahrenheit= ($celcius * 9/5) + 32;
        echo $fahrenheit;
}
/**function to calculate from fahrenheit degree to  celcius*/
public static function celciusconversion($fahrenheit)
{
        $celcius=($fahrenheit-32)* 5/9;
        echo $celcius;
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
 while($money>0)
 {
     while($money>=$array1[$i])
     {
         $notes=floor($money/$array1[$i]);
        echo $array1[$i]. "notes are:".$notes."\n";
        echo "\n";
        $money=floor($money%$array1[$i]);
        }
        $i++;
 }
}
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
public static function bubblesortfile($Array1)
{
    $start_time = round(microtime(true) * 1000);
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
    echo "after sorting:";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]. "\n ";
    }
    $stop_time = round(microtime(true) * 1000);
    echo "\n";
    $elapsed=floor($stop_time-$start_time);
     echo $elapsed;
}
public static function bubblesortStringfile($Array1)
{ 
    $start_time = round(microtime(true) * 1000);
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
        echo $Array1[$indexi]."\n ";
    }
    $stop_time = round(microtime(true) * 1000);
    $elapsed=$stop_time-$start_time;
     echo  $elapsed;
}
public static function insertionsortfile($Array1)
{ 
    $start_time = round(microtime(true) * 1000);
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
        echo $Array1[$indexi]." \n";
    }
    $stop_time = round(microtime(true) * 1000);
    $elapsed=$stop_time-$start_time;
    echo $elapsed;
}
/**function to calculate sorting of strings by using insertionsort */
public static function insertionsortstringfile($array1)
{ 
    $start_time = round(microtime(true) * 1000);
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
        echo $array1[$indexi]."  ";
    }
    $stop_time = round(microtime(true) * 1000);
     $elapsed=$stop_time-$start_time;
     echo $elapsed;
}
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
public static function findnumber($array1,$key)
{
    $start=0;
    $end=sizeof($array1)-1;
    $mid=($start+$end)/2;
    while($start<=$mid)
    {
            if($mid==$key)
            {
                echo "the element you searched is ".$array1[$mid];
                break;
            }
            else if($key>$mid)
            {
                $end=$mid++;
            }
            else if($key<$mid)
            {
                $end=$mid--;
            }
    }
}
}
?>
