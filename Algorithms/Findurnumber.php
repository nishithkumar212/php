 <?php
 include('Alutility.php');
echo " enter a number";
$num=Alutility::getInt();
$result=pow(2,$num);
$array1=array();
$j=1;
for($i=0;$i<$result;$i++)
{
    $array1[$i]=$j;
    $j++;
}
print_r($array1);
echo "enter the element to search:";
$search=Alutility::getInt();
Alutility::findnumber($array1,$search);
?>