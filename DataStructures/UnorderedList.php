<?php
/**
* Purpose:  Read the Text from a file, split it into words and arrange it as Linked List. Take a user input to search a Word in the List. If the Word is not found then add it to the list, and if it found then remove the word from the List. I
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('LinkedList.php');
include('Dutility.php');
$file=fopen("words.txt","r"); //openeing the file
$s=fread($file,filesize("words.txt")); // reading the file 
$array1=explode(" ",$s); // converting string in to an array
$obj=new LinkedList;
for($i=0;$i<sizeof($array1);$i++) 
{
    $obj->add($array1[$i]); // adding in to the linkedlist 
}
$obj->display(); // displaying the elements of a linkedlist 
echo "\n";
echo " enter the search word :";
$string =Dutility::getString();
$bool=$obj->search($string); // searching the word 
if($bool==true)
{
    $obj->delete($string); // if condition is true deleting it 
}
else
{
    $obj->add($string);// adding to the list 
}
$obj->display();
$s=$obj->getdata();
$files=fopen("words.txt","w"); // opening a file
fwrite($files,$s); // updating the file.
?>