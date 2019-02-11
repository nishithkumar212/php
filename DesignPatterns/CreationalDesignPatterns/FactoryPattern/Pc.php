<?php
include_once ('Computer.php');
/**
 * class which is used to extend the abstract class name computer
 */
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
 class pc extends Computer
{
    //declaring the variables
    public $style;
    public $color;
    //constructor used to initialize the variables of a class 
    private  function __construct($name,$price,$style,$color)
    {
            $this->name=$name;
            $this->price=$price;
            $this->style=$style;
            $this->color=$color;
    }
    /**
     * function used to print the details of a class
     */
    public  function getDetails()
    {
         echo  $this->name."\n";
         echo  $this->price."\n";
         echo  $this->style."\n";
         echo $this->color."\n";
    }
    /**
     * function used to create an object for the class 
     * @param indicates to pass the arguments for the constructor when the object of a class is created.
     */
    public static function  getMethodObject($cname,$cprice,$cstyle,$ccolor)
    {
        //creating an object and passing the arguments 
        $pobj=new Pc($cname,$cprice,$cstyle,$ccolor);
        //by using the object calling the method
        $pobj->getDetails();
    }

}
?>