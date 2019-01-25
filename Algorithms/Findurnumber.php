 <?php
 /**
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
echo "\n";
echo "enter the element to search:";
$search=Alutility::getInt();
$number=Alutility::findnumber($array1,$search);
?>