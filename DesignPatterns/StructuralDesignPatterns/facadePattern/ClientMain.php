<?php
/**
 * including all the classes and interfaces in main
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
include_once 'Shopkeeper.php';
include_once 'Nokia.php';
include_once 'Samsung.php';
include '../../Dutility.php';

//asking the user to enter the choice
echo "enter your choice:";
echo "1.nokia 2.samsung";
//Getting the integer value from Dutility function
$choice = Dutility::getInt();
method($choice);
/**
 * method developed ,as depending upon the choice of user it will call the function
 * @param indicates the value to be passed to choose the method
 */
function method($choice)
{
    $obj = new Shopkeeper;
    try
    {
        switch ($choice) {
            //calling the method by using the object
            case 1:$obj->nokiaSale();
                break;
            //calling the  method by using the object
            case 2:$obj->samsungSale();
                break;
        }
    } catch (Exception $e) {
        $e->getmessage();
    }
}
