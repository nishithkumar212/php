<?php
include('Wutility.php');
/**
 * creation of a class named Engine
 */
class Engine
{
    //A method which is used to dispaly the details of speed 
    public function speed()
    {
        echo "good speed around 80-100";
    }
}

/**
 * creation of a class named AudiEngine
 */
class AudiEngine
{
    // A method which is used to dispaly the details of speed 
    public function speed()
    {
        echo "speed around 100-120";
    }
}

/**
 * creation of a class named HondaEngine
 */
class HondaEngine
{
    // A method which is used to dispaly the details of speed 
    public function speed()
    {
        echo "speed around 100-130";
    }
}

/**
 * creation of a class named BenzeEngine
 */
class BenzeEngine
{
    // A method which is used to dispaly the details of speed 
    public function speed()
    {
        echo "speed around 100-130";
    }
}

/**
 * Creation of a class named car
 */
class  Car
{
    private $Engine;
    /**
     * involking the constructor to initialize the variable
     */
    function __construct($engine)
    {
        $this->Engine=$engine;
    }
    public function call()
    {
        $this->Engine->speed();
    }
}
//$object=new Engine;
echo "ENTER WHICH TYPE  OF CAR ENGINE YOU WANT"."\n";
echo "  1.AudiEngine 2.HondaEngine  3.BenzeEngine  else Default enter 4 ";
$choice=Wutility::getInt();
try
{
switch($choice)
{
    case 1: $object=new AudiEngine();
            $obj=new Car($object);
            $obj->call();
            break;
    case 2: $object=new HondaEngine();
            $obj=new Car($object);
            $obj->call();
            break;
    case 3: $object=new BenzeEngine();
            $obj=new Car($object);
            $obj->call();
            break;
    default:$object=new Engine();
            $obj=new Car($object);
            $obj->call();
            break;;
}
}
catch(Exception $e)
{
    $e->getMessage();
}