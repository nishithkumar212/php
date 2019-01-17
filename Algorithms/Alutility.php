<?php
class Alutility {
public static function getInt()
{
    fscanf(STDIN,"%d",$integer);
    return $integer;
}
public static function getString()
{
    fscanf(STDIN,"%s",$string);
    return $string;
}
public static function getFloat()
{
    fscanf(STDIN,"%f",$float);
    return $float;
}
public static function anagram($String1,$String2)
{
    $len1=strlen($String1);
    $len2=strlen($String2);
    if($len1==$len2)
    {
        $array1=str_split($String1);
        $array2=str_split($String2);
        sort($array1);
        sort($array2);
        $string3=implode("",$array1);
        $string4=implode("",$array2);
        if($string3==$string4)
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
public static  function primes($number)
{
    $i=0;
    $primes1=array();
     for($indexi=1;$indexi<=$number;$indexi++)
     {
        $count=0;
        for($indexj=$indexi;$indexj>=1;$indexj--)
        {
            if($indexi%$indexj == 0)
            {
                $count=$count+1;
            }
        }
        if( $count==2)
        {
            $primes1[$i]=$indexi;
            $i++;
        }
    }
     for($index=0;$index<sizeof($primes1);$index++)
     {
        
         echo $primes1[$index]." ,";
     }
}
public static function palindrome($primearray)
{
    $rev=0;
    $i=0;
    $primes1=array();
    for($indexi=0;$indexi<sizeof($primearray);$indexi++)
    {
        $num=$primearray[$indexi];
        while($num>0)
        {
        $ld=$num%10;
        $rev=$rev*10+$ld;
        $num=$num/10;
        }
        if($num==$rev)
        {
            $primes1[$i]=$num;
            $i++;
        }
    }
    for($index=0;$index<sizeof($primes1);$index++)
     {
        
         echo $primes1[$index]." ,";
     }
}
public static function primeanagrams($prime)
{
    for($indexi=0;$indexi<sizeof($prime);$index++)
    {
        for($indexj=$indexi+1;$indexj<sizeof($prime);$indexj++)
        {
            sort($prime[$indexi]);
            sort($prime[$indexj]);

        }
    }
}
 public static function binarySearch($array1,$key)
{
$start=0;
$end=sizeof($array1);
$mid=round($start+$end/2);
echo $mid;
while($start<=$end)
{
    if($key==$array1[$mid])
    {
        echo "the element found at".$mid;
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
public static function binarySearchstring($Array1,$key)
{
    $start=0;
    $end=sizeof($Array1);
   
    while($start<=$end)
    {
        $mid=round(($start+$end)/2);
        if(strcmp($Array1[$mid],$key==0))
        {
            echo "the element found at index ".$mid;
            break;
        }
        else if(strcmp($Array1[$mid],$key>0))
        {
            $start=$mid+1;
        }
        else if(strcmp($Array1[$mid],$key<0))
        {
            $end=$mid-1;
        }
    }
}
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
    echo "\n";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi]. " ";
    }
}
public static function bubblesortString($Array1)
{
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
        echo $Array1[$indexi]." ";
    }
}
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
public static function calculateDayofWeek($day,$month,$year)
{
        $y0 = floor($year -(14 - $month) / 12)+1;
        $x = floor($y0 + ($y0/4) - ($y0/100) + $y0/400);
        $m0 = $month + 12 * ((14 - $month) / 12)-2;
        $d0 = floor($day + $x + 31*$m0 / 12)%7;
         $d0;`
        
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
public static function  fahreinconversion($celcius)
{
        $fahrenheit= ($celcius * 9/5) + 32;
        echo $fahrenheit;
}
public static function celciusconversion($fahrenheit)
{
        $celcius=($fahrenheit-32)* 5/9;
        echo $celcius;
}
}
?>
