<?php
include_once ('Laptop.php');
//include_once ('Server.php');
//include_once ('pc.php');
include('../../Dutility.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class ComputerFactory
{
    /**
     * function developed to move to the switch case
     * @param indicates an argument to be passed entered by the end -user.
     */
public static  function getInstance($str)
{
    //assigning the user-given value to the variable choice
    $choice=$str;
    try
    {
    switch($choice)
    {
        //case 1 for getting the details of a laptop
        case 1:     echo "enter the name for lap\n";
                     $name=Dutility::getString();
                     echo "enter the price:\n";
                    $price=Dutility::getInt();
                    echo "enter the ram size \n";
                    $ram=Dutility::getString();
                    echo "enter the hard disk:\n";
                    $hard=Dutility::getString();
                    echo "enter the processor:\n";
                    $processor=Dutility::getString();
                    $obj=Laptop::getMethodObject($name,$price,$ram,$hard,$processor);
        
                    $obj->getDetails();
                    break;
        //case 2 for getting the details of pc
        case 2:     echo "enter the name for pc:\n";
                        $cname=Dutility::getString();
                        echo "enter the price for pc:\n";
                        $cprice=Dutility::getInt();
                        echo "enter what type of style for pc:\n";
                        $cstyle=Dutility::getString();
                        echo "enter the color of pc:\n";
                        $ccolor=Dutility::getString();
                        $objs=Pc::getMethodObject($cname,$cprice,$cstyle,$ccolor);
                        $objs->getDetails();
                    break;
        case 3: 
        //case 3 for getting the details of server
                   echo "enter the name of server:\n";
                   $sname=Dutility::getString();
                   echo "enter the price for server:\n";
                   $sprice=Dutility::getInt();
                    echo "enter the version of server\n";
                    $sversion=Dutility::getString();
                    echo "enter the ip of server\n";
                    $sip=Dutility::getString();
                    $ser=Server::getMethodObject($sname,$sprice,$sversion,$sip);
                    $ser->getDetails();
                    break;
    }
}
catch(Exception $e)
{
    $e->getmessage();
}
{

}
}
}
?>