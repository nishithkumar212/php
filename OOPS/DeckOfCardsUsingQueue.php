<?php
/**
 * Purpose:a Program DeckOfCards.java, to initialize deck of cards having suit ("Clubs", "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King", "Ace") implementation through queue.
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 ******************************************************************************/
include 'Queue.php';
include 'Outility.php';
 // creating an object for queue
$obj = new Queue;
$object = new Queue;

 // creating a usedr defined class 
class DeckOfCards
{
    
    //  function to store the cards
    public function storecards($cards, $arrayone, $arraytwo)
    {
        for ($i = 0; $i < sizeof($arrayone); $i++) {
            for ($j = 0; $j < sizeof($arraytwo); $j++) {
                $cards[$i][$j] = $arrayone[$i] . "" . $arraytwo[$j];
            }
        }

     // function to return the cards
        return $cards;
    }

     // function to shuffle the cards containing the parameters of storedcards and suits and ranks 
    public function shufflecards($cardspack, $arrayone, $arraytwo)
    {
        for ($i = 0; $i < sizeof($cardspack); $i++) {
            for ($j = 0; $j < sizeof($cardspack[$i]); $j++) {
                $rand1 = rand(0, sizeof($arrayone) - 1);
                $rand2 = rand(0, sizeof($arraytwo) - 1);
                $temp = $cardspack[$i][$j];
                $cardspack[$i][$j] = $cardspack[$rand1][$rand2];
                $cardspack[$rand1][$rand2] = $temp;
            }
        }
         // function to return the shuffle cards
        return $cardspack;
    }
}
 // creating an object for the user-defined class
$ob = new DeckOfCards;

 // creating an array of suits containing (clubs,diamonds,hearts,spades)
$arrayone = array("Clubs", "Diamonds", "Hearts", "Spades");

 // creating an array of rank ranging from (2-10,jack ,king,queen,ace) 
$arraytwo = array("2", "3", "13", "5", "6", "7", "8", "9", "10", "jack", "king", "queen", "ace");

 // creating an array 
$cards = array();

 // calling the function to store the cards with containing the parameters
$cardspack = $ob->storecards($cards, $arrayone, $arraytwo);

 // calling the function to shuffle the cards with containing the parameters 
$cardspack = $ob->shufflecards($cardspack, $arrayone, $arraytwo);

 // creating an array of players 
$rrr = array("player1", "player2", "player3", "player4");
for ($i = 0; $i < 4; $i++) {

     // used to call the enqueue method to store 
    $object->enqueue($rrr[$i]);
}
for ($i = 0; $i < sizeof($cardspack); $i++) {
    $array1 = array();
    for ($j = 0; $j < sizeof($cardspack[$i]); $j++) {

         // function used to store the elements in an array
        $array1[$j] = $cardspack[$i][$j];
    }

     // sorting the elements in an array 
    array_multisort($array1);
    for ($k = 0; $k < sizeof($array1); $k++) {

      // used to call and store in a queue a  set of array elements
        $obj->enqueue($array1[$k]);
    }
}
for ($i = 0; $i < 4; $i++) {
     // calling the dequeue method
    $value = $object->dequeue();
     // printing the value of it
    echo $value . "::";
    for ($j = 0; $j < 9; $j++) {
    
    // calling the dequeue method and storing in the address variable
        $address = $obj->dequeue();
    // printing the value of a variable
        echo $address . "  ";
    }
    echo "\n";
}
