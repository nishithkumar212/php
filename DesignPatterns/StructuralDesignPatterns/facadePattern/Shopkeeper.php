<?php
include 'Nokia.php';
include 'Samsung.php';
/**
 * Developed a class named Shopkeeper which is used to call the implemented methods in Nokia class and Samsung class
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Shopkeeper
{
    //Declaring the variables
    public $nokia;
    public $samsung;

    // function __construct()
    // {
    //     $nokia=new Nokia();
    //     $samsung=new Samsung();
    // }
    /**
     * Function used to call the implemented methods in Nokia class
     */
    public function nokiaSale()
    {
        //creating an object for the class
        $nokia = new Nokia;

        //calling the method by using the object
        $nokia->modelNo();
        //calling the method by using the object
        $nokia->price();
    }
    /**
     * Function used to call the implemented methods in Samsung  class
     */
    public function samsungSale()
    {
        //creating an object for the class
        $samsung = new Samsung;
        //calling the method by using an object 
        $samsung->modelNo();
        //calling the method by using an object
        $samsung->price();
    }
}
