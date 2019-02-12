<?php
/**
 * Purpose: it is useful when you are interested in the state of an object and want to get notified whenever there is any change. In observer pattern, the object that watch on the state of another object are called Observer and the object that is being watched is called Subject.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 ******************************************************************************/
/**
 * Generating an Exception Handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * including all the files which are used in the program
 */
include_once 'Subject.php';
include_once 'Customer.php';
include_once 'Product.php';
//Creating an object for the class named product which extends subject abstract class
$obj = new Product();
//Creating an object for the class named customer  which extends observer abstract class
$object = new Customer();
/**
 * calling the method
 * @param indicates an reference of a class
 */
$obj->registerObserver($object);
/**
 * calling the function and passing the arguments
 * @param indicates arguments are passed by the user
 */
$obj->updateFavorites('samsung is available') . "\n";
/**
 * calling the function and passing the arguments
 * @param indicates arguments are passed by the user
 */
$obj->updateFavorites('nokia is available ') . "\n";
/**
 * calling the method
 * @param indicates passing an argument of class reference to remove
 */
//$obj->removeobserver($object);
$obj->updateFavorites('lenovo is available');
$obj->removeobserver($object);
$obj->updateFavorites('galaxy is  available');