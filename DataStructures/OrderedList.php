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
    /**
     * // opening a file
     */
$int=fopen("integer.txt","r"); 

    /**
     * reading a file
     */
$numbers=fread($int,filesize("integer.txt")); 

    /**
     * //converting string in to an array
     */
$array1=explode(" ","$numbers"); 
sort($array1);
for($i=0;$i<sizeof($array1);$i++)
    {
    /**adding each element in to the linkedlist */
    $obj->add($array1[$i]); 
    }

    /**displaying the elements of a linkedlist */
$obj->display(); 
echo "\n";
echo "enter the search element:";
$key=Dutility::getInt();

    /**function to search an element  */
$bool=$obj->search($key); 
if($bool==true)
    {
    /** // if condition is true deleting the element of a linkedlist */
    $obj->delete($key);
    }
else
    {
     /**adding the element in to the linkedlist */
$obj->add($key); // 
    }
$obj->display();
$s=$obj->getdata();

    /**opening a file  */
$files=fopen("integer.txt","w");
 
    /** updating the file*/
fwrite($files,$s); 
?>