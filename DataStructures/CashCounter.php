<?php
/**
* Purpose: program for cashcounter of a machine
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
$total=10000;
include('Dutility.php');
include('Queue.php');
$obj=new Queue;
$object=new Queue;
$total=10000;
echo " enter the number of people to add to the queue:";
$num=Dutility::getInt();
for($i=0;$i<$num;$i++)
{
     echo "enter the name:";
     $str=Dutility::getString();
     $obj->enqueue($str);
}
    echo $num ."are added to the queue";
while($num>0)
{
    $name=$obj->dequeue2();
    echo $name;
    echo "1.deposit 2.withdrawl ";
    echo "\n";
    echo "enter your choice:";
    $a=Dutility::getInt();
    switch($a)
    {
        case 1:echo "enter the amount:";
                $amount=Dutility::getInt();
                $total=$total-$amount;
                $name=$obj->dequeue();
                echo $name."has dequed";
                echo " the remaining persons in the queue are:\n";
                $obj->display();
                echo "\n";
                break;
                
        case 2:  echo " enter the witdrawl amount:";
                 $amount1=Dutility::getInt();
                 $total=$total-$amount1;
                   //$withdrwalamount=$object->dequeue($amount1);
                 $name=$obj->dequeue();
                 echo $name."has dequed";  
                 echo " the remaining persons in the queue are:\n";
                 $obj->display();
                break;
                // echo "1.deposit 2.withdrawl ";
                // echo "\n";
                // echo "enter your choice:";
                // $b=Dutility::getInt();
    }
    $num--;

}

//     if($a==1)
//     {
//         my::deposit();
//         $name=$obj->dequeue();
//         echo $name."is exited";
//     }
//     else if($a==2)
//     {
//        my::withdrawl();
//         $name1=$obj->dequeue();
//         echo $name1."is exited";
//     }
//     $num--;
// }
// function deposit()
// {
//     global$total;
//     echo " enter the amount to deposit:";
//     $amount=Dutility::getInt();
//     $object->enqueue($amount);
//     $total=$total+$amount;
//     echo "amount deposited is:".$total;

// }
// function withdrawl()
// { 
//         global $total;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $amount=$object->dequeue($amount);
//         echo "the amount withdrawl is:".$total;
//         $total=$total-$amount;
//     }
// function balance()
// {
//     global $total;
//     //$object=new Queue;
//     echo "the balance is:".$total;
// }
// }
// $object=new Queue;

// echo "1.deposit   2.withdraw  3.balance";
// $num=Dutility::getInt();

// class my
// {
// function choice($nums)
// {
// switch($nums)
// {
//     case 1:my::deposit();
//            break;
//     case 2:my::withdraw();
//             break;
//     case 3:my::balance();
//             break;

// }
// }
// // $obj->display();
// // class cash
// // {
   
// // function getdata()
// // {
// //  for($j=1;$j<=$number;$j++)
// // {
// //     echo "1.deposit  2.withd$number=Dutility::getInt();
// $obj=new Queue;
// $total=0;
// global $num;
// for($i=1;$i<=$number;$i++)
// {
//     echo "enter the name";
//     $str=Dutility::getString();
//     $obj->enqueue($str);
// }
// echo "1.deposit   2.wifunction withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }ce";
// $num=Dutility::getInt(function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }

// // class my
// {
// function choice($nums)function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // {
// // switch($nums)
// {
//     case 1:my::deposit();
//            break;
//     case 2:my::withdraw();
//             break;
//     case 3:my::balafunction withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
//             break;

// }
// }
// // $obj->display();function withdrawl()
// /
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// {
//         echo "your balance is:" .$total;

// }
// }

// $object=new my;
// $object->choice($num);
// // }
// // }
// // $casher=new cash;
// // $obj=new Queue;
// // $casher->getdata();";
// //             echo " enter you$number=Dutility::getInt();
// $obj=new Queue;
// $total=0;
// global $num;
// for($i=1;$i<=$number;$i++)
// {
//     echo "enter the name";
//     $str=Dutility::getString();
//     $obj->enqueue($str);
// }
// echo "1.deposit   2.withdraw  3.balance";
// $num=Dutility::getInt();

// class my
// {
// function choice($nums)
// {
// switch($nums)
// {
//     case 1:my::deposit();
//            break;
//     case 2:my::withdraw();
//             break;
//     case 3:my::balance();
//             break;

// }
// }
// // $obj->display();
// // class cash
// // {
   
// // function getdata()
// // {
// //  for($j=1;$j<=$number;$j++)
// // {
// //     echo "1.deposit  2.withdrawl  3.balance";
// //             echo " enter your choice:";
// //         $num=Dutility::getInt();
// //         if($num==1)
// //         {
// //             cash::deposit();
// //         }
// //         else if($num==2)
// //         {
// //             withdrawl();
// //         }
// //         else if($num==3)
// //         {
// //             balance();
// //         }
// // }
// // }
// function deposit()
// {
//     $obj=new Queue();
//     echo " enter the amount to deposit:";
//     $amount=Dutility::getInt();
//      $obj->enqueue($amount);
//             $obj->dequeue();
//             $obj->display();













//             my::choice($num-1);
// }
// function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// function balance()
// {
//         echo "your balance is:" .$total;

// }
// }

// $object=new my;
// $object->choice($num);
// // }
// // }
// // $casher=new cash;
// // $obj=new Queue;
// // $casher->getdata();
// //         $num=Dutility::getIn$number=Dutility::getInt();
// $obj=new Queue;
// $total=0;
// global $num;
// for($i=1;$i<=$number;$i++)
// {
//     echo "enter the name";
//     $str=Dutility::getString();
//     $obj->enqueue($str);
// }
// echo "1.deposit   2.withdraw  3.balance";
// $num=Dutility::getInt();

// class my
// {
// function choice($nums)
// {
// switch($nums)
// {
//     case 1:my::deposit();
//            break;
//     case 2:my::withdraw();
//             break;
//     case 3:my::balance();
//             break;

// }
// }
// // $obj->display();
// // class cash
// // {
   
// // function getdata()
// // {
// //  for($j=1;$j<=$number;$j++)
// // {
// //     echo "1.deposit  2.withdrawl  3.balance";
// //             echo " enter your choice:";
// //         $num=Dutility::getInt();
// //         if($num==1)
// //         {
// //             cash::deposit();
// //         }
// //         else if($num==2)
// //         {
// //             withdrawl();
// //         }
// //         else if($num==3)
// //         {
// //             balance();
// //         }
// // }
// // }
// function deposit()
// {
//     $obj=new Queue();
//     echo " enter the amount to deposit:";
//     $amount=Dutility::getInt();
//      $obj->enqueue($amount);
//             $obj->dequeue();
//             $obj->display();













//             my::choice($num-1);
// }
// function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// function balance()
// {
//         echo "your balance is:" .$total;

// }
// }

// $object=new my;/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// $object->choice/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// // }
// // }
// // $casher=new /
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// // $obj=new Que/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// // $casher->get/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// //         if($/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// //         {
// //             cash::deposit();$number=Dutility::getInt();
// $obj=new Queue;
// $total=0;
// global $num;
// for($i=1;$i<=$number;$i++)
// {
//     echo "enter the name";
//     $str=Dutility::getString();
//     $obj->enqueue($str);
// }
// echo "1.deposit   2.withdraw  3.balance";
// $num=Dutility::getInt();

// class my
// {
// function choice($nums)
// {
// switch($nums)
// {
//     case 1:my::deposit();
//            break;
//     case 2:my::withdraw();
//             break;
//     case 3:my::balance();
//             break;

// }
// }
// // $obj->display();
// // class cash
// // {
   
// // function getdata()
// // {
// //  for($j=1;$j<=$number;$j++)
// // {
// //     echo "1.deposit  2.withdrawl  3.balance";
// //             echo " enter your choice:";
// //         $num=Dutility::getInt();
// //         if($num==1)
// //         {
// //             cash::deposit();
// //         }/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// //         e/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// //         {/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
// //          //
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//         //$to/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()ount;
//         $obj-/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//         $obj-/
//         //$total=$total-$amount;
//         $obj->dequeue();/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//         $obj->display();/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//             my::choice($/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()-1);
//     }
// // function balance()
//             m/
//         //$total=$total-/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()ount;
//         $obj->dequeue();/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//         $obj->display();/
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// // function balance()
//             my::choice($num-1);
//     }
// // function balance()-1);
//     }
// // function balance()
// //         }
// //         else if($num==3)
// //         {
// //             balance();
// //         }
// // }
// // }
// function deposit()
// {
//     $obj=new Queue();
//     echo " enter the amount to deposit:";
//     $amount=Dutility::getInt();
//      $obj->enqueue($amount);
//             $obj->dequeue();
//             $obj->display();













//             my::choice($num-1);
// }
// function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// function balance()
// {
//         echo "your balance is:" .$total;

// }
// }

// $object=new my;
// $object->choice($num);
// // }
// // }
// // $casher=new cash;
// // $obj=new Queue;
// // $casher->getdata();
// //         }
// //         else if($num==2)
// //         {
// //             withdrawl();
// //         }
// //         else if($num==3)
// //         {
// //             balance();
// //         }
// // }
// // }
// function deposit()
// {
//     $obj=new Queue();
//     echo " enter the amount to deposit:";
//     $amount=Dutility::getInt();
//      $obj->enqueue($amount);
//             $obj->dequeue();
//             $obj->display();













//             my::choice($num-1);
// }
// function withdrawl()
// { 
//     $obj=new Queue;
//         echo "enter the amount to withdraw:";
//         $amount=Dutility::getInt();
//         $obj->dequeue($amount);
//         //$total=$total-$amount;
//         $obj->dequeue();
//         $obj->display();
//             my::choice($num-1);
//     }
// function balance()
// {
//         echo "your balance is:" .$total;

// }
// }

// $object=new my;
// $object->choice($num);
// // }
// // }
// // $casher=new cash;
// // $obj=new Queue;
// // $casher->getdata();