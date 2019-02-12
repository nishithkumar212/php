<?php
include_once 'Observer.php';
/**
 * Creating an Exception handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * Creation of a class which is used to extend from abstract class named Observer
 */
class Customer extends Observer
{
    //constructor
    public function __construct()
    {

    }
/**
 * Function which is used to call the method
 * @param indicates class references and Subject indicate the type Hinting
 */
    public function update(Subject $subject)
    {
        echo "alert" . "\n";
        //calling and printing.
        echo  "hello user ".$subject->getFavorites() . "\n";

    }
}
