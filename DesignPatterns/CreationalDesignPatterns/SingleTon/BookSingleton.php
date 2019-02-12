
<?php
/**
 * Creation of a class named BookSingleton
 */
class BookSingleton 
{
    //Declaring and initializing the variables
    private $author="nishith";
    private $title="MyDreams";
    private static $book = NULL;
    private static $status  = FALSE;
    /**
     * Function to return the value of a variable
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * Function to return the value of a Title
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Function to return the both variables values
     */
    public function getAuthorandTitle()
    {
        return $this->getTitle()."by".$this->getAuthor();
    }
    /**
     * Function to set the status 
     * @param indicates the variable of type BookSingleton holding the reference of it
     */
    function returnBook(BookSingleton $bookReturned) 
    {
        self::$status = FALSE;
    }
    /**
     * Static Function of Lazy Initialization 
     */
     static function borrowBook()
      {
      if (FALSE == self::$status) 
      {
        if (NULL == self::$book) 
        {
            //Creating an object for the class
           self::$book = new BookSingleton();
        }
        //setting the status value has true
        self::$status = TRUE;
        return self::$book;
      }
       else 
      {
        //Returning as null
        return NULL;
      }
    }
}

