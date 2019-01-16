<?php
function getInt()
{
    fscanf(STDIN,"%d",$integer);
    return $integer;
}
function getString()
{
    fscanf(STDIN,"%s",$string);
    return $string;
}
function getFloat()
{
    fscanf(STDIN,"%f",$float);
    return $float;
}
function anagram($String1,$String2)
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
}
// function primes($number)
// {
//     $primes1=array();
//     $count=0;
//     $i=0;
//      for($indexi=1;$indexi<=$number;$indexi++)
//      {
//         for($indexj=$indexi;$indexj>0;$indexj--)
//         {
//             if($indexi%$indexj == 0)
//             {
//                 $count++;
//             }
//             $indexj--;
//         }
//         if( $count==2)
//         {

//             //echo $indexi;
//             $primes1[$i]=$indexi;
//             $i++;
//         }
// //      }
//      for($index=0;$index<sizeof($primes1);$index++)
//      {
        
//          echo $primes1[$index];
//      }
// }
// function binarySearch($elements,$key)
// {
// $start=0;
// $end=sizeof($elements);
// $mid=round($start+$end/2);
// while($start<=$end)
// {
//     if($key==$elements[$mid])
//     {
//         echo "the element found at".$elements[$mid];
//     }
//     else if($key>$elements[$mid])
//     {
//         $start=$mid++;
//     }
//     else
//     {
//         $end=$mid--;
//     }
// }
// }
function binarySearchstring($Array1,$key)
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
        else if(strcmp($array1[$mid],$key>0))
        {
            $start=$mid+1;
        }
        else if(strcmp($array1[$mid],$key<0))
        {
            $end=$mid-1;
        }
    }
}
function bubblesort($Array1)
{
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        for($indexj=$indexi+1;$indexj<sizeof($Array1);$indexj++)
        {
            if($Array1[$indexi]>$Array1[$indexj])
            {
                $temp=$Array1[$indexi];
                $Array1[$indexi]=$Array1[$indexj];
                $Array1[$indexj]=$temp;
            }
        }
    }
    echo "after sorting";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi];
    }
}
function bubblesortString($Array1)
{
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        for($indexj=$indexi+1;$indexj<sizeof($Array1);$indexj++)
        {
            if(strcmp($Array1[$indexi],$Array1[$indexj])>0)
            {
                $temp=$Array1[$indexi];
                $Array1[$indexi]=$Array1[$indexj];
                $Array1[$indexj]=$temp;  
            }
        }
    }
    echo "after sorting";
    for($indexi=0;$indexi<sizeof($Array1);$indexi++)
    {
        echo $Array1[$indexi];
    }
}
?>






























