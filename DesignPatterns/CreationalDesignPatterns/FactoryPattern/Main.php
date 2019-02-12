<?php
/**
 * Purpose: Create a Computer Factory that can Produce PC, Laptop and Server Class Computers and ComputerFactory is able to create the corresponding Computer Object on request.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 *
 ******************************************************************************/
include_once 'ComputerFactory.php';
/**
 * Generating an Exception Handler
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class FactoryDesign
{
    public function main()
    {
        try {
            //creating an object for a class
            $obj = new ComputerFactory();
            echo "1.Laptop Details 2 .pc Details 3.Server Details";
            echo "enter your choice:";
            $choice = Dutility::getInt();
            if ($choice == 1) {
                //if condition executes calling the method
                $obj->getInstance($choice);
            } else if ($choice == 2) {
                //if condition executes calling the method
                $obj->getInstance($choice);
            } else if ($choice == 3) {
                //if condition executes calling the method
                $obj->getInstance($choice);
            }
        } catch (Exception $e) {
            $e->getmessage();
        }
    }
}
//creating an object for a class
$object = new FactoryDesign;
/**
 * calling the main method
 */
$object->main();
