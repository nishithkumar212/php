<?php
/**
 * Purpose: program by using singleton and following various approaches.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 *
 ******************************************************************************/
/**
 * including the files in the program
 */
include_once 'BookBorrower.php';
include_once 'BookSingleton.php';
//Creating an object for the class
$book1 = new BookBorrower();
//Creating an object for the class
$book2 = new BookBorrower();
$book1->borrowBook();
//printing the statement
echo "BookBorrower1:asked to borrow the book" . "\n";
echo "BookBorrower1 :Author and Title: " . "\n";
//calling the method  by using the object
echo $book1->getAuthorAndTitle() . "\n";

//calling the method by using the object
$book2->borrowBook();

//printing the statement
echo "BookBorrower2 :asked to borrow the book" . "\n";
echo " BookBorrower2 :Author and Title:" . "\n";
//calling the method to get the details by using an object
echo $book2->getAuthorAndTitle() . "\n";

//calling the method  to return
$book1->returnBook();
//after calling printing the statement
echo "BookBorrower1 returned the book" . "\n";
//calling the method once again
$book2->borrowBook();
//printing the statement
echo "BookBorrower2 Author and Title: " . "\n";
//After printing once again calling the method to get the details.
echo $book1->getAuthorAndTitle() . "\n";
