<?php
/**
* Purpose: Read .a List of Numbers from a file and arrange it ascending Order in a Linked List
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('Dutility.php');
include('LinkedList.php');
$obj=new LinkedList;
$int=fopen("integer.txt","r");
$numbers=fread($int,filesize("integer.txt"));
$array1=explode(",","$numbers");
sort($array1);
for($i=0;$i<sizeof($array1);$i++)
{
    $obj->add($array1[$i]);
}
$obj->display();
echo "\n";
echo "enter the search element:";
$key=Dutility::getInt();
$bool=$obj->search($key);
if($bool==true)
{
    $obj->delete($key);
}
else
{
$obj->add($key);
}
$obj->display();
$s=$obj->getdata();
$files=fopen("integer.txt","w");
fwrite($files,$s);

?>