<?php
include 'MobileShop.php';
/**
 * Developed a class Name Nokia which it is used to implement MobileShop interface
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Nokia implements MobileShop
{
    //implementing the interface method named modelno()
    public function modelNo()
    {
        echo " brand:nokia 6600" . "\n";
    }
    //implementing the interface method named price()
    public function price()
    {
        echo " price:25000";
    }
}
