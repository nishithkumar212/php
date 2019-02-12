<?php
include_once 'ItemElement.php';
/**
 * Generating an Exception handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * class named fruit which is used to implement the interface named itemelement
 */
class Fruit implements ItemElement
{
    //Declaring the variables
    private $name;
    private $price;
    /**
     *Generating the constructor which is used to initialize the variables
     *@param indicates   the arguments which are used to initialize the variables.
     **/
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    /**
     * Function used to get the variable name
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Function used to set the variable value.
     * @param indicates to set the value for a variable
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    /**
     * Function used to get the name of+ a variable
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Function used to set the value for a variable
     * @param indicates the argument to initialize the variable
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * Function used to call the visiting method
     * @param indicates the reference class stored in it.
     */
    public function accept(CartVisitor $visitor)
    {
        $visitor->visiting($this);
    }
}
