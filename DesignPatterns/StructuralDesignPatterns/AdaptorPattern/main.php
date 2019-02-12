<?php
/**
 * Purpose: it is used so that two unrelated interfaces can work together. The object that joins these unrelated interface is called an Adapter.
 * @author Nishithkumar
 * @version 1.0
 * @since 06-02-2019
 ******************************************************************************/
include_once 'SocketAdapterimp.php';
include_once '../../Dutility.php';
/**
 *Creating a class named Mobile
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Mobile
{
    //declaring the variable
    private $cvolt;
    /**
     * Constructor used to initialize the varibale
     */
    public function __construct($voltage)
    {
        $this->cvolt = $voltage;
    }
    /**
     * function used to evaluate the passed value and variable are same
     * @param indicates the value passed by the user
     */
    public function charge($tvolt)
    {
        //checking both are equal are not
        try {
            if ($this->cvolt == $tvolt) {
                //if the condition is true it used to print it
                echo "its charging:";
            } else {
                echo "its  not charging..";
            }
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
}
//creating an object for the class named SocketAdapterimp
$obj = new SocketAdapterimp;
//calling the method
$defaultVolt = $obj->get3Volt();
//asking the user to enter the voltage
echo "enter the voltage :";
//taking the integer value and storing in a variable
$current = Dutility::getInt();
//creating an object for the class
$object = new mobile($current);
//calling the method named charge
$object->charge($defaultVolt);
