<?php
/**
 * File:Swappingofnibbles.php
 * Purpose: program used for swapping of nibbles
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
include('Alutility.php');
echo " enter the number:";
$number=Alutility::getInt();
$binary=Alutility::binary($number);
for($j=0;$j<sizeof($binary);$j++)
    { 
        echo $binary[$j]."\n";
    }
    $string=implode("",$binary);
    $len=sizeof($binary);
    echo "\n";
    //echo $len."\n";
    $required=8-$len;
    // echo $required."\n";
    // echo $string."\n";
    for($i=0;$i<$required;$i++)
    {
        $string= "0".$string;
    
    }
    $j=0;
    $s=0;
    /**taking the first 4 values of a string  */
    $str1=substr($string,0,4);
    /** taking the last 4 values of a string by using substring method */
    $str2=substr($string,4,8);
    /** assignimg  */
    $str3=$str1; 
    /**concatenating */
    $str3=$str2.$str3; 
    //echo $str3;
    echo"\n";
    /**splitting in to array */
    $myarr=str_split($str3); 
    /** function to convert in to decimal */
        Alutility::decimal($myarr);
    // $array1=explode(" ",$str3);

    // for($i=sizeof($array1);$i>=0;$i--)
    // {
    //     $power=pow(2,$j);
    //    $s=$s+($power*$array1[$i]);
    //    $j++;
    // }
    // echo "after swapping the nibbles:".$s;

?>