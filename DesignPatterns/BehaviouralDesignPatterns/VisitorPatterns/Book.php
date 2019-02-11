<?php
include_once ('ItemElement.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Book implements ItemElement
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
    public function setPrice()
    {
          $this->price=$price;
    }
    public function getName()
    {
          return $this->name;
    }
    public function setName($names)
    {
         $this->name=$names;
    }
    public function accept(CartVisitor $visitor)
    {
             $visitor->visit($this);   
    }
}
?>
