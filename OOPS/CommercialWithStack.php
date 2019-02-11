<?php
/**
* Purpose: maintain the Stock Symbol Purchased or Sold in a Stack implemented using Linked List 
* @author Nishithkumar
* @version 1.0
* @since 30-01-2019
******************************************************************************/
include 'Outility.php';
include 'Stack.php';
/**
 * declaring a class named commercial
 */
class Commercial
{
    
     // Declaring the variables of a class
     
    public $name;
    public $share;
    public $price;
}
/**
 * function to add the stocks in to the json file entered by the user
 */
function ToBuy($uname, $ushare, $uprice, $jvalue)
{

    $obj = new Commercial;
    $obj->name = $uname;
    $obj->share = $ushare;
    $obj->price = $uprice;
    $jvalue[] = $obj;
    return $jvalue;
}
/**
 * function to sell the stocks to remove the shares from the json file
 */
function sell($arrs)
{
    // {
    echo "enter the number of shares to be deleted:";
    $str = Outility::getInt();
    $i = search($arrs);
    $one = $i;
    for ($i = $one; $i <= $one; $i++) {
        $num = $arrs[$i]->share;
        $sharevalue = $num - $str;
        $arrs[$i]->share = $sharevalue;
    }
    //     if ($i > -1)
    //     {
    //         array_splice($arrs, $i, 1);
    //         echo "Entry Deleted\n";
    //     }
    //     else
    //      {
    //         echo "Entry Not Found\n";
    //     }
    //     fscanf(STDIN, "%s\n");
    // }
    return $arrs;
}
/**
 * function used to get the json file contents
 */
function decode()
{
    $jvalue = json_decode(file_get_contents('stars.json'));
    return $jvalue;
}
/**
 * function used to find the  searched stock name
 */
function search($arrs)
{
    echo "Enter stockname to search\n";
    $uname = Outility::getString();
    for ($i = 0; $i < count($arrs); $i++) {
        if ($arrs[$i]->name == $uname) {
            return $i;
        }
    }
    return -1;
}
/**
 * function which it is used to exit from the  program
 */
function exits()
{
    exit();
}
/**
 * function used to save the content in to the json file
 */
function save($valuesof)
{
    $arry = json_encode($valuesof);
    file_put_contents('stars.json', $arry);
}
/**
 * function used to display the details whether what actions to be performed.
 */
function menu($address, $stacks)
{
    echo "  enter 1.buy 2.sell  3.print 4.exit:\n";
    $choice = Outility::getInt();
    switch ($choice) {
        case '1':
            echo "enter the stock name:";
            $uname = Outility::getString();
            echo "enter the price:";
            $uprice = Outility::getInt();
            echo "enter how many shares:";
            $ushare = Outility::getInt();
            $arry = ToBuy($uname, $ushare, $uprice, $address);
            $stacks->push($arry);
            save($arry);
            $jsonsarr = decode();
            menu($jsonsarr, $stacks);
            break;
        case '2':
            $jsonvalue = decode();
            $valuesof = Sell($jsonvalue);
            $stacks->push($valuesof);
            save($valuesof);
            break;
        case '3':$stacks->display();
            menu($jsonsarr, $stacks);
        case '4':exits();
            break;
    }
}

//  function used to get the details of json file. 
$address = json_decode(file_get_contents('stars.json'));
 // creating an object for stack
$stacks = new Stack;
menu($address, $stacks);
