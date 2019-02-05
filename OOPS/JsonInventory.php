<?php
/**
 * Purpose: Create a JSON file having Inventory Details for Rice, Pulses and Wheats with properties name, weight, price per kg.
 * @author Nishithkumar
 * @version 1.0
 * @since 23-01-2019
 *
 ******************************************************************************/
include 'Outility.php';
class Inventory
{
    /**
     * Declaring the variables.
     */
    public $name;
    public $weight;
    public $price;
    /**
     * Generating getters method
     */
    public function getname()
    {
        return $this->name;
    }
    /**
     * Generating setters method
     */
    public function setname($name)
    {
        $this->name = $name;
    }
    /**
     * Generating getters method
     */
    public function getweight()
    {
        return $this->sharenumber;
    }
    /**
     * Generating setters method
     */
    public function setweight($weight)
    {
        $this->weight = $weight;
    }
    /**
     * Generating getters method
     */
    public function getprice()
    {
        return $this->shareprice;
    }
    /**
     * Generating the setters method
     */
    public function setprice($shareprice)
    {
        $this->price = $shareprice;
    }
}
    /**
     * function to ask the user and enter the details of Rice,pulses,And wheat.
     */
function add($arr)
{
    $arrayone = array("Rice", "pulses", "wheat");
    $j = 0;
    /**
     * Generating the loop to enter the details of stock names
     */
    for ($i = 1; $i <= 3; $i++) {
        echo "enter the " . $arrayone[$j] . " name:";
        $names = Outility::getString();
        echo "enter the " . $arrayone[$j] . " weight:";
        $weights = Outility::getInt();
        echo "enter the " . $arrayone[$j] . " price:";
        $price = Outility::getInt();
        /**
         * Creating an object for the class
         */
        $obj = new Inventory;
        /**
         * calling the setters method to initialize the variables.
         */
        $obj->setname($names);

         /**
         * calling the setters method to initialize the variables.
         */
        $obj->setweight($weights);

         /**
         * calling the setters method to initialize the variables.
         */
        $obj->setprice($price);

        /**
         * initialing the object of values to an array
         */
        $arr[$j] = $obj;
        /**
         * filling the json file of array containg values
         */
        $js = json_encode($arr);

        /**
         * filling the content of files in it
         */
        file_put_contents('My.json', $js);
        $j++;
    }
}
        /**
         * function that takes the json file content and displaying the values
         */
function user($data)
{
    foreach ($data as $key) {
        // echo $key->name."|".$key->weight."|". $key->price."the value is:".($key->name*$key->price)."\n";
        /**
         * printing the each and every stock details
         */
        echo $key->name . "\n";
        echo $key->weight . "\n";
        echo $key->price . "\n";
        echo "the value is:" . $key->weight * $key->price . "\n";
    }
}
$arr = array();
        /**
         * function calling to add the details 
         */
add($arr);
        /**
         * calling the json file through the method json_decode
         */
$data = json_decode(file_get_contents('My.json'));
user($data);
