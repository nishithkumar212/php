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
$int=fopen("integer.txt","r"); // opening a file
$numbers=fread($int,filesize("integer.txt")); //reading a file
$array1=explode(" ","$numbers"); //converting string in to an array
sort($array1);
for($i=0;$i<sizeof($array1);$i++)
    {
    $obj->add($array1[$i]); // adding each element in to the linkedlist
    }
$obj->display(); // displaying the elements of a linkedlist
echo "\n";
echo "enter the search element:";
$key=Dutility::getInt();
$bool=$obj->search($key); //function to search an element 
if($bool==true)
    {
    $obj->delete($key); // if condition is true deleting the element of a linkedlist
    }
else
    {
$obj->add($key); // adding the element in to the linkedlist
    }
$obj->display();
$s=$obj->getdata();
$files=fopen("integer.txt","w"); // opening a file 
fwrite($files,$s); // updating the file
?>