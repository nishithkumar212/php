<?php
/**
 * Purpose:  Read the Text from a file, split it into words and arrange it as Linked List. Take a user input to search a Word in the List. If the Word is not found then add it to the list, and if it found then remove the word from the List. I
 * @author Nishithkumar
 * @version 1.0
 * @since 23-01-2019
 *
 ******************************************************************************/
include 'LinkedList.php';
include 'Dutility.php';
    /**openeing the file */
$file = fopen("words.txt", "r");

    /** reading the file */
$s = fread($file, filesize("words.txt"));

    /** converting string in to an array */
$array1 = explode(" ", $s); 
$obj = new LinkedList;
for ($i = 0; $i < sizeof($array1); $i++)
 {

    /** adding in to the linkedlist */
    $obj->add($array1[$i]);
 }

    /**displaying the elements of a linkedlist */
    $obj->display();  
    echo "\n";
    echo " enter the search word :";
    $string = Dutility::getString();
    /** searching the word */
    $bool = $obj->search($string); 
    if ($bool == true) 
{
    /** if condition is true deleting it */
    $obj->delete($string); 
} else {
    /** adding to the list */
    $obj->add($string); 
}
    $obj->display();
    $s = $obj->getdata();
    /** opening a file */
    $files = fopen("words.txt", "w");
    /** updating the file. */
    fwrite($files, $s); 
