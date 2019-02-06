<?php
/**
 * Purpose:The Inventory Manager will use InventoryFactory to create Inventory Object from JSON. The InventoryManager will call each Inventory Object in its list to calculate the Inventory Price and then call the Inventory Object to return the JSON String.
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 *
 ******************************************************************************/
include 'Outility.php';
class stock
{
    /**
     * Declaring the variables
     */
    public $name;
    public $share;
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
    public function getshare()
    {
        return $this->sharenumber;
    }
    /**
     * Generating setters method
     */
    public function setshare($sharenumber)
    {
        $this->share = $sharenumber;
    }
    /**
     * Generating getters method
     */
    public function getprice()
    {
        return $this->price;
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
 * function developed to add the number of stocks to be added
 */
function add($port)
{
    echo " enter the no of stocks:";
    $number = Outility::getInt();
    $j = 0;
    for ($i = 1; $i <= $number; $i++) {
        echo " enter the stock name:";
        $name = Outility::getString();
        echo " enter the number of shares:";
        $share = Outility::getInt();
        echo " enter the share price";
        $price = Outility::getInt();
        $object = new Stock;
        $object->setname($name);
        $object->setshare($share);
        $object->setprice($price);
        $port[$j] = $object;
        $js = json_encode($port);
        file_put_contents('Stock.json', $js);
        $j++;
    }
}
/**
 * function to print each and every stock detail
 */
function printed($data)
{
    $total = 0;
    echo "Stock Name | Per Share Price | No. Of Shares | Stock Price\n";
    foreach ($data as $key) {
        echo $key->name . "\n";
        echo $key->share . "\n";
        echo $key->price . "\n";
        echo "the stock value:" . $key->share * $key->price . "\n";
        $total = $total + $key->share * $key->price;
    }
    echo "Total Value Of Stocks is : " . $total . " rs\n";
}
$port = array();
/**
 * function developed to add  data to the json file
 */
add($port);
/**
 * function to get the json_file by using json_decode method
 */
$data = json_decode(file_get_contents('Stock.json'));
/**
 * function developed to print the stock details.
 */
printed($data);
