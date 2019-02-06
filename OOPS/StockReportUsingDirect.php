<?php
/**
 * Purpose: a program to read in Stock Names, Number of Share, Share Price. Print a Stock Report with total value of each Stock and the total value of Stock.
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 *
 ******************************************************************************/

include 'Outility.php';
/**
 * creating a class named stock
 */
class Stock
{
    /**
     * declaring the variables.
     */
    public $name;
    public $sharenumber;
    public $shareprice;

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
    public function getsharenumber()
    {
        return $this->sharenumber;
    }
    /**
     * Generating setters method
     */
    public function setsharenumber($sharenumber)
    {
        $this->sharenumber = $sharenumber;
    }
    /**
     * Generating getters method
     */
    public function getshareprice()
    {
        return $this->shareprice;
    }
    /**
     * Generating the setters method
     */
    public function setshareprice($shareprice)
    {
        $this->shareprice = $shareprice;
    }
}
/**
 * function developed to add the number of stocks to be added
 */
function add($number, $arr)
{

    for ($i = 0; $i < $number; $i++) {
        echo "enter the stock name:";
        $name = Outility::getString();
        echo "enter the share number:";
        $sharenumber = Outility::getInt();
        echo "enter the share price:";
        $shareprice = Outility::getInt();
        /**
         * creating an object for a class
         */
        $obj = new Stock;
        /**
         * calling the setters method to initialize the value.
         */
        $obj->setname($name);
        $obj->setsharenumber($sharenumber);
        $obj->setshareprice($shareprice);
        $arr[$i] = $obj;
    }
       /**
        * returning the generated array of objects
        */
    return $arr;
}

echo " enter the number of stocks:";
$number = Outility::getInt();
$arr = array();
$arrayone = add($number, $arr);
$total = 0;
/**
 * printing the each and every stock information
 */
foreach ($arrayone as $first) {
    echo $first->name . "\n";
    echo $first->sharenumber . "\n";
    echo $first->shareprice . "\n";
    echo "the stock value is:" . ($first->sharenumber * $first->shareprice) . "\n";
    $total = ($total + $first->sharenumber * $first->shareprice);
}
/**
 * printing the total stock value
 */
echo "the total stock value is:" . $total;
