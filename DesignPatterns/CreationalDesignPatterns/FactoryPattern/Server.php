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
 * class server which is used to extend the abstract class named computer
 */
class server extends Computer
{
    //Declaring the variables.
    public $version;
    public $ip;
    //involking the constructor
    public function __construct($sname, $sprice, $sversion, $sip)
    {
        $this->name = $sname;
        $this->price = $sprice;
        $this->version = $sversion;
        $this->ip = $sip;
    }

    /**
     * Printing the Details of variables
     */
    public function getDetails()
    {
        echo $this->name . "\n";
        echo $this->price . "\n";
        echo $this->version . "\n";
        echo $this->ip . "\n";
    }

    /**
     * method developed to create an object for the class
     * @param indicates the values are passed to thr constructor.
     */
    public function getMethodObject($sname, $sprice, $sversion, $sip)
    {
        $sobj = new server($sname, $sprice, $sversion, $sip);
        return $sobj;
    }
}
