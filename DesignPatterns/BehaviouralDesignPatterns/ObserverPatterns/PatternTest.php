<?php
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
include_once ('Subject.php');
include_once ('Customer.php');
include_once ('Product.php');
$obj=new Product();
$object=new Customer();
$obj->registerObserver($object);
$obj->updateFavorites('samsung is available')."\n";
  $obj->updateFavorites('nokia is available ')."\n";
  $obj->removeobserver($object);
  $obj->updateFavorites('not available');

