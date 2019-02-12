<?php
include_once 'ItemElement.php';
/**
 * Creation of an Exception Handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * Creation of a class named Book which is used to implement the interface named ItemElement
 */
class Book implements ItemElement
{
    //Declaring the variables.
    private $name;
    private $price;
    /**
     * Generating the constructor which is used to initialize the variables.
     * @param indicates the aruguments which takes to initialize the variables.
     */
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    /**
     * Function gettersmethod  used to get the details of a variable
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Function settersmethod  used to set the details of a variable
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * Function gettersmethod  used to get the details of a variable
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Function settersmethod  used to set the details of a variable
     */
    public function setName($names)
    {
        $this->name = $names;
    }
    /**
     * function used to call the visit method
     * @param indicates the reference of a class
     */
    public function accept(CartVisitor $visitor)
    {
        $visitor->visit($this);
    }
}
