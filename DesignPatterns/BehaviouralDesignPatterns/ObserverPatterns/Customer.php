<?php
include_once('Observer.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Customer extends Observer
{
   function __construct()
   {

   }
    
public function update(Subject $subject)
{
   echo "alert"."\n";
    echo $subject->getFavorites()."\n";

}
}