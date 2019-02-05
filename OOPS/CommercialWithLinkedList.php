<?php
include('Outility.php');
include('LinkedList.php');
class Stocks
{
    public $name;
    public $share;
    public $price;
}
function ToAdd($arr)
{
    echo "enter the name:";
    $uname=Outility::getString();
    echo "enter the share;";
    $ushare=Outility::getInt();
    echo "enter the price:";
    $uprice=Outility::getInt();
    $obj=new Stocks;
    $obj->name=$uname;
    $obj->share=$ushare;
    $obj->price=$uprice;
    $arr=$obj;
    return $arr;
}
function menu()
{
    echo "enter 1.ToAdd 2.ToRemove 3.Toprint ";
    $number=Outility::getInt();
    $arr=array();
    $object=new LinkedList;
    switch($number)
    {
        case 1:
                $rrr=ToAdd($arr);
                $object->add($rrr);
                $object->display();
                break;
        case 2:ToRemove();
                break;
        case 3:ToPrint();
                break;
        
    }
}
menu();