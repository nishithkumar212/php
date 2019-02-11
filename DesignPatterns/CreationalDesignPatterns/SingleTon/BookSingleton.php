
<?php

class BookSingleton 
{
    private $author="nishith";
    private $title="MyDreams";
    private static $book = NULL;
    private static $status  = FALSE;

    public function getAuthor()
    {
        return $this->author;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getAuthorandTitle()
    {
        return $this->getTitle()."by".$this->getAuthor();
    }
    function returnBook(BookSingleton $bookReturned) 
    {
        self::$status = FALSE;
    }
    /**
     * Static Function of Lazy Initialization 
     */
     static function borrowBook() {
      if (FALSE == self::$status) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton();
        }
        self::$status = TRUE;
        return self::$book;
      } else {
        return NULL;
    }
    
    }
    
}

