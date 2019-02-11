<?php
include_once ('ItemElement.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Fruit implements ItemElement
{
    
    private $name;
    private $price;
    function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price=$price;
    }
    public function getName()
    {
        return  $this->name;
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function accept(CartVisitor $visitor)
    {
         $visitor->visiting($this);
    }
}
?>
