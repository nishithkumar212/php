<?php
include_once ('BookSingleton.php');
class BookBorrower
{
    //declaring the Variables
    private $borrowedBook;
    private $havebook=false;
    /**
     * function to return Author and Title if the condition is true
     */
    function getAuthorAndTitle() 
    {
        if (TRUE == $this->haveBook) 
        {
          return $this->borrowedBook->getAuthorAndTitle();
        } 
        else 
        {
          return "I don't have the book";
        }
      }
      /**
       * function to initialize the variable by calling the static method 
       * if it is null it suppose to initialize the variable be false 
       * else true
       */
      function borrowBook() 
      {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == NULL) {
          $this->haveBook = FALSE;
        } else {
          $this->haveBook = TRUE;
        }
      }
      /**
       * function to return the book contained value.
       */
      function returnBook()
       {
        $this->borrowedBook->returnBook($this->borrowedBook);
      }
    }
?>