<?php
/**
 * Purpose: program is used when the Object creation is a costly affair and requires a lot of time and resources and you have a similar object already existing.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 *
 ******************************************************************************/
/**
 * creating an abstract class named Book
 */
abstract class Book
{
    //declaring the variables
    public $bookPage;
    public $bookColor;
    //creating an abstract method named wish
    abstract public function wish();
}
/**
 * Generating an Exception Handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);

/**
 * class named First which is use to extend the class Book
 */
class First extends Book
{
    //declaring the variables.
    private $bookPrice;
    private $bookAuthor;
    /**
     * developing the settermethod
     * @param indicates the value for a variable.
     */
    public function setBookPage($bookPage)
    {
        $this->bookPage = $bookPage;
    }

    public function setBookColor($bookColor)
    {
        //initalizing the variable
        $this->bookColor = $bookColor;
    }

    public function setBookPrice($bookPrice)
    {
        //intializing the variable through setters method
        $this->bookPrice = $bookPrice;
    }

    public function setBookAuthor($bookAuthor)
    {
        //initializing the variable through setters method
        $this->bookAuthor = $bookAuthor;
    }

    /**
     * method developd to print the information about the book
     */
    public function wish()
    {
        echo "welcome to" . $this->bookAuthor . "\n";
    }
    /**
     * printing the details
     */
    public function getDetails()
    {
        echo $this->bookPage . "\n";
        echo $this->bookColor . "\n";
        echo $this->bookPrice . "\n";
        echo $this->bookAuthor . "\n";
    }
}
/**
 * class names second extending the abstract class Book
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Second extends Book
{
    //declaring the variables
    private $bookVersion;
    private $bookSize;
    /**
     * function for setters
     * @param indicates the argument to initialize the variable.
     */
    public function setBookPage($bookpage)
    {
        //initializing the variable with the given argument
        $this->bookPage = $bookPage;
    }
    /**
     *  initializing the variable through setters method
     *  @param indicates the argument to initialize the variable.
     */
    public function setbookColor($bookcolor)
    {
        $this->bookColor = $bookColor;
    }
    /**
     *  initializing the variable through setters method
     *  @param indicates the argument to initialize the variable.
     */
    public function setbookVersion($bookVersion)
    {
        $this->bookVersion = $bookVersion;
    }
    /**
     *  initializing the variable through setters method
     *  @param indicates the argument to initialize the variable.
     */
    public function setbookSize($bookSize)
    {
        $this->bookSize = $bookSize;
    }
    /**
     * method developd to print the information about the book version
     */
    public function wish()
    {
        echo "welcome to" . $this->bookVersion . "\n";
    }
    /**
     * function which it is used to print the detailed information
     */
    public function getDetails()
    {
        echo $this->bookpage . "\n";
        echo $this->bookcolor . "\n";
        echo $this->bookVersion . "\n";
        echo $this->bookSize . "\n";
    }
}
//creating an object for the class named First
$obj = new First;
//$obj->wish();
//calling the variable and passing an argument to initialize it
$obj->setBookPage(100);
//calling the variable and passing an argument to initialize it
$obj->setBookColor("blue");
//calling the variable and passing an argument to initialize it
$obj->setBookPrice(120);
//calling the variable and passing an argument to initialize it
$obj->setBookAuthor("nishith");
//printing the details
$obj->getDetails();
//cloning the object in to another object
$cloneobj = clone $obj;
//passing the new argument from the cloned object
$cloneobj->setBookAuthor("Nishith kumar ache");
/**
 * function used to get the details
 */
$cloneobj->getDetails();
$obj->getDetails();
// echo "----------------------";
// $objs=new Second;
// $objs->wish();
// $objs->setbookpage(100);
// $objs->setbookcolor("red");
// $objs->setbookVersion(2.0);
// $objs->setbookSize("medium");
// $obj->getdetails();
// echo "--------------------------";

// $first->getdetails();
// echo"---------------------------";
// $second=clone $objs;
// $second->getdetails();
