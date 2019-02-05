<?php
include('Outility.php');
include('Commercial.php');
     function menu()
    {
        echo "1.create account 2.sell 3.save 4. printreport 5 .update 6 .exits.\n";
        echo "enter your choice:";
     $number=Outility::getInt();
    switch($number)
    {
        case 1:Commercial::createAccount();
                break;
        case 2:Commercial::sell();
                break;
        case 3:Commercial::save();
                break;
        case 4:Commercial::printreport();
                break;
        case 5:Commercial::update();
        case 6:Commercial::exits();
    }
    menu();
}
menu();