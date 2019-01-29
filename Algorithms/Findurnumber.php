 <?php
 /**
 * File:FindNumber.php
 * Purpose: program to find the user given number by using binarysearch 
 * @author :Nishithkumar
 * @version :1.0
 * @since :15-01-2019
 *
 ******************************************************************************/
 include('Alutility.php');
echo " enter a number:";
$num=Alutility::getInt();
$result=pow(2,$num);
$array1=array();
$j=1;
for($i=0;$i<$result;$i++)
{
    $array1[$i]=$j;
    $j++;
}
for($i=0;$i<sizeof($array1);$i++)
{
    echo $array1[$i]."  ";
} 
$start=$array1[0];
$end=sizeof($array1);
echo "\n";
//echo "enter the element to search:";
//$search=Alutility::getInt();
$valueof=findNumber($array1,$start,$end); /** function to find the number given by user*/
 echo "the number you serached is:".$array1[$valueof];

 function findNumber($arr, $start,$end) 
{
while($start<=$end)
{
	 $mid=($start+$end)/2;
	echo "you number is ".$arr[$mid]." if yes enter TRUE,else FALSE:";
    $a=Alutility::getString();
	if($a ==true)
	{
       return $mid;
    }
    else if($a ==false)
    {
	 echo "your number is greater than ".$arr[$mid]."if yes enter true,else false :";
	$b=Alutility::boolean();
	if($b==true)
	{
		$start=$mid++;
	}
	else
	{
		$end=$mid--;
    }
}
}
}