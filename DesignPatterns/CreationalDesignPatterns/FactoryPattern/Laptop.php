<?php
include_once 'Computer.php';
/**
 * Generating an Exception Handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);

/**
 * class which is used to extend computer abstract  class
 */
class Laptop extends Computer
{
    //declaring the variables
    public $ram;
    public $hardDisk;
    public $processor;
    /**
     * constructor used to initialize the variables of a class
     */
    private function __construct($name, $price, $ram, $hardDisk, $processor)
    {
        $this->name = $name;
        $this->price = $price;
        $this->ram = $ram;
        $this->hardDisk = $hardDisk;
        $this->processor = $processor;
    }

    /**
     * function used to print the details of a class
     */
    public function getDetails()
    {
        echo $this->name . "\n";
        echo $this->price . "\n";
        echo $this->ram . "\n";
        echo $this->hardDisk . "\n";
        echo $this->processor . "\n";
    }

    /**
     * function used to create an object for the class
     * @param indicates to pass the arguments to involke the constructor when an object is created
     */
    public static function getMethodObject($name, $price, $ram, $hard, $processor)
    {
        //creating an object and passing an arguments
        $obj = new Laptop($name, $price, $ram, $hard, $processor);
        return $obj;
    }
}
