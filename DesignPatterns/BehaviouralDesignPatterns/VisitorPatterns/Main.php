<?php
/**
 * Purpose:  it is used when we have to perform an operation on a group of similar kind of Objects. With the help of visitor pattern, we can move the operational logic from the objects to another class.
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
 * Including all the files.
 */
include_once 'ItemElement.php';
include_once 'Book.php';
include_once 'Fruit.php';
include_once 'ShoppingCartImp.php';

/**
 * function used to call the accept method which in turn call its appropriate method
 * @param indicates reference of an implementation class
 */
function clientCode(array $components, CartVisitor $visitor)
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }
}

/**
 * creation of an object for the class book and fruit and storing in an array named Components.
 */
$components = [
    new Book("nishith", 2000),
    new Fruit("mango", 120),
];
//creation an object for the class named ShoppingcartImp
$visitor1 = new ShoppingCartImp;

/**
 * calling the method and passing an argument
 * @param indicates the reference object for a class
 */
clientCode($components, $visitor1);
