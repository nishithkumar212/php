<?php
include_once ('ComputerFactory.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class FactoryDesign
{
    function main()
    {
        try{
        //creating an object for a class
        $obj=new ComputerFactory();
        echo "1.Laptop Details 2 .pc Details 3.Server Details";
          echo "enter your choice:";
          $choice=Dutility::getInt();
          if($choice==1)
          {
              //if condition executes calling the method
              $obj->getInstance($choice);
          }
          else if($choice==2)
          {
              //if condition executes calling the method
              $obj->getInstance($choice);
          }
          else if($choice==3)
          {
              //if condition executes calling the method
              $obj->getInstance($choice);
          }
    }
        catch(Exception $e)
        {
        $e->getmessage();
        }
}
}
//creating an object for a class
$object=new FactoryDesign;
/**
 * calling the main method
 */
$object->main();
?>