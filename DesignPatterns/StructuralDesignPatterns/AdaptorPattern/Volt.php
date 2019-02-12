<?php
/**
 * Developing a class Named volt
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Volt
{
    //declaring the variable
    public $volts;
    /**
     * constructor used to initialize the variable
     */
    public function __construct($volts)
    {
        $this->volts = $volts;
    }
    /**
     * Developing the gettermethod to return the value of a variable when it is called
     */
    public function getVolts()
    {
        return $this->volts;
    }
    /**
     * Developing the setters method to initialize the value of a declared variable
     */
    public function setVolts($v)
    {
        $this->volts = $v;
    }
}
