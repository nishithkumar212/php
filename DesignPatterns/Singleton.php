<?php
include 'Dutility.php';
class Singleton
{
    private $name;
    private $price;
    private static $instance = 0;
    private function __construct($names, $prices)
    {
        $this->name = $names;
        $this->price = $prices;
        self::$instance++;

    }
    public function getDetails()
    {
        echo $this->name . "\n";
        echo $this->price . "\n";
    }
    public static function getInstance($naming, $pricing)
    {
        if (self::$instance == null) {
            $obj = new Singleton($naming, $pricing);
            return $obj;
        } else {
            return self::$instance;
        }
    }
}
$object = Singleton::getInstance("amazon", 1200);
//Asking the user to enter how many times to display.
echo "enter your choice to dispaly how many times:";
//retrieving the integer value
$choice = Dutility::getInt();
for ($i = 1; $i <= $choice; $i++) {
    //creating an object for one time and displayin the details by using the same object.
    $object->getDetails() . "\n";
}
