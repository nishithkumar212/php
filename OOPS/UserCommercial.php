<?php
/**
 * Purpose:tockAccount.java implements a data type that might be used by a financial institution to keep track of customer information.
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 ******************************************************************************/
include 'Outility.php';
/**
 * creating a user-defined class
 */
class commercial
{
    /**
     * declaring the variables
     */
    public $name;
    public $price;
    public $share;
}
/**
 * function to create a user-define account.
 */
function CreateAccount()
{
    echo "enter your name:";
    $uname = Outility::getString();
    $file = $uname . ".json";
    fopen("$file", "w");
    echo "your account is created with your name:" . $uname . "\n";
}
/**
 * function to display the stock details
 * @ param an array object of stockdetails
 */
function StockDetails($address)
{
    foreach ($address as $key) {
        {
            echo $key->name . "||" . $key->share . "||" . $key->price . "\n";
        }
    }
}
/**
 * function to add the details to the user-defined Account
 */
function ToBuy($uname, $amount, $ushare, $jvalue)
{

    $obj = new Commercial;
    $obj->name = $uname;
    $obj->price = $amount;
    $obj->share = $ushare;
    $jvalue[] = $obj;
    return $jvalue;
}
/**
 * function to save the details to the user-defined account
 */
function save($arry)
{
    echo "enter your name to add to ur file:";
    $naam = Outility::getString();
    $arr = json_encode($arry);
    file_put_contents($naam . ".json", $arr);
}
/**
 * function to sell the details of shares by the user
 */
function ToSell($arry)
{
    echo "enter the number of shares to be deleted:";
    $str = Outility::getInt();
    $i = search($arry);
    $one = $i;
    for ($i = $one; $i <= $one; $i++) {
        $number = $arry[$i]->share;
        $sharevalue = $number - $str;
        $arry[$i]->share = $sharevalue;
    }
    
     // returning an array; 
    return $arry;
}

/**
 * function which is used to print all the stock details of user account values
 */
function ToPrint($val)
{

    $total = 0;
    foreach ($val as $person) {
        echo $person->name . "\n";
        echo $person->share . "\n";
        echo $person->price . "\n";
        echo "the total value is:" . $person->share * $person->price . "\n";
        $total = 0 + $person->share * $person->price;
    }
    echo "the total value of all the stocks is:$total\n";
}
/**
 * function to search an given element by the user
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
 * function which is used to get access the json file
 */
function decode()
{
    echo "enter your  name";
    $uname = Outility::getString();
    $myfile = $uname . ".json";
    $jvalue = json_decode(file_get_contents($myfile));
    return $jvalue;
}
/**
 * function which is used to exit from the program
 */
function exits()
{
    exit();
}
/**
 * function used to display the details what operations has to be done by the user.
 */
function menu($address)
{

    echo "1.create an account 2.to buy 3.to sell 4.toprint 5.exit";
    $number = Outility::getInt();
    switch ($number) {
        
             // case 1:which it is used to create an account     
        case 1:CreateAccount();
            menu($address);
            break;
        
             // case2:which it is used to add the details to a user-defined account
        case 2:StockDetails($address);
            echo "enter the stock name:";
            $uname1 = Outility::getString();
            echo "enter the price:";
            $amount = Outility::getInt();
            echo "enter how many shares:";
            $ushare = Outility::getInt();
            $jvalue = decode();
            $arry = ToBuy($uname1, $amount, $ushare, $jvalue);
            save($arry);
            menu($address);
            break;

             // case3:which it is used sell the stocks from the user-defined account 
        case 3:
            $jsonvalue = decode();
            $valuesof = ToSell($jsonvalue);
            save($valuesof);
            break;
        case 4:

             // case4:which it is used to print all the details of a stock json file content.
            $val = decode();
            ToPrint($val);
            menu($address);
            break;
        case 5:exits();
    }
}
$address = json_decode(file_get_contents('Commercialone.json'));

 // calling the function. 
menu($address);
