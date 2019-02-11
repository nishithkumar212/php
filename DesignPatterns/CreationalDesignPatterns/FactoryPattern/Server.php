<?php
include_once ('Computer.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * class server which is used to extend the abstract class named computer
 */
 class server extends  Computer
{
    //Declaring the variables.
    public $version;
    public $ip;
    //involking the constructor
    function __construct($name,$price,$version,$ip)
    {
            $this->name=$name;
            $this->price=$price;
            $this->version=$version;
            $this->ip=$ip;
    }
    /**
     * Printing the Details of variables
     */
    public  function getDetails()
    {
         echo  $this->name."\n";
         echo  $this->price."\n";
         echo  $this->version."\n";
         echo $this->ip."\n";
    }
    /**
     * method developed to create an object for the class
     * @param indicates the values are passed to thr constructor.
     */
    public function getMethoDdetails($sname,$sprice,$sversion,$sip)
    {
        $sobj=new Sever($sname,$sprice,$sversion,$sip);
        $sobj->getDetails();
    }
}
?>