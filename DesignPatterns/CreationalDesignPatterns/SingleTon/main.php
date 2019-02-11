<?php
include_once ('BookBorrower.php');
include_once ('BookSingleton.php');
$book1=new BookBorrower();
$book2=new BookBorrower();
$book1->borrowBook();
echo "BookBorrower1:asked to borrow the book"."\n";
echo "BookBorrower1 :Author and Title: "."\n";
echo $book1->getAuthorAndTitle()."\n";

$book2->borrowBook();
echo "BookBorrower2 :asked to borrow the book"."\n";
echo " BookBorrower2 :Author and Title:"."\n";
echo $book2->getAuthorAndTitle()."\n";

$book1->returnBook();
echo "BookBorrower1 returned the book"."\n";

$book2->borrowBook();
echo "BookBorrower2 Author and Title: "."\n";
echo $book1->getAuthorAndTitle()."\n";