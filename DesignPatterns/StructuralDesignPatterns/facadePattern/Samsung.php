<?php
include_once 'MobileShop.php';
/**
 *  Developed a class Name Samsung  which it is used to implement MobileShop interface
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Samsung implements MobileShop
{
    //implementing the interface method named modelno()
    public function modelNo()
    {
        echo " Brand:samsung j2";
    }
    //implementing the interface method named price()
    public function price()
    {
        echo " price:10000";
    }
}
