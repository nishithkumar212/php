<?php
include('Volt.php');
/**
 * creating a class named Socket
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Socket
{
        /**
        * function used to create an object for the class.
        */
    public function  getVolt()
    {
        /**
         *  creating an object for the class Volt
         * @param indicates the value passed to initialize the variable.
         */
        $vol=new Volt(120);
        //function used to call the method.
         return $vol->getVolts();
    }
}