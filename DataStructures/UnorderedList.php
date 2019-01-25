<?php
/**
* Purpose: Program for  Read the Text from a file, split it into words and arrange it as Linked List. Take a user input to search a Word in the List. If the Word is not found then add it to the list, and if it found then remove the word from the List. In the end save the list into a file
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
include('LinkedList.php');
include('Dutility.php');
$file=fopen("words.txt","r");
$s=fread($file,filesize("words.txt"));
$array1=explode(" ",$s);
$obj=new LinkedList;
for($i=0;$i<sizeof($array1);$i++)
{
    $obj->add($array1[$i]);
}
$obj->display();
echo "\n";
echo " enter the search word :";
$string =Dutility::getString();
$bool=$obj->search($string);
if($bool==true)
{
    $obj->delete($string);
}
else
{
    $obj->add($string);
}
$obj->display();
$s=$obj->getdata();
$files=fopen("words.txt","w");
fwrite($files,$s);
?>