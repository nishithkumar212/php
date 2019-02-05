<?php
/**
 * Purpose:a Program DeckOfCards.java, to initialize deck of cards having suit ("Clubs", "Diamonds", "Hearts", "Spades") & Rank ("2", "3", "4", "5", "6", "7", "8", "9", "10", "Jack", "Queen", "King", "Ace").
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 *
 ******************************************************************************/
include 'Outility.php';
/**
 * a class named deck.
 */
class Deck
{
    /**
     * function used to store the cards.
     */
    public function storecards($cards, $arrayone, $arraytwo)
    {
        /**
         * loop iterates through in a 2-Dimensional foramt and storing in a array
         */
        for ($i = 0; $i < sizeof($arrayone); $i++) {
            for ($j = 0; $j < sizeof($arraytwo); $j++) {
                $cards[$i][$j] = $arrayone[$i] . "" . $arraytwo[$j];
            }
        }
        /**
         * returning the stored cards.
         */
        return $cards;
    }
    /**
     * function used to shuffle the stored cards.
     */
    public function shufflecards($cardspack, $arrayone, $arraytwo)
    {
        for ($i = 0; $i < sizeof($cardspack); $i++) {
            for ($j = 0; $j < sizeof($cardspack[$i]); $j++) {
                /**
                 * Generating the random number from row index 0-3
                 */
                $rand1 = rand(0, sizeof($arrayone) - 1);
                /**
                 * generating the random number through the column length of 0-size of row index
                 */
                $rand2 = rand(0, sizeof($arraytwo) - 1);
                /**
                 * Storing in a Random value
                 */
                $temp = $cardspack[$i][$j];
                /**
                 * Storing in th i,j index
                 */
                $cardspack[$i][$j] = $cardspack[$rand1][$rand2];

                /**
                 * Storing the temp value in the above generated Random index.
                 */
                $cardspack[$rand1][$rand2] = $temp;
            }
        }
        /**
         * returning the shuffle cards.
         */
        return $cardspack;
    }
}
/**
 * creating the object
 */
$object = new Deck;
/**
 * creating an array of 4 players:
 */
$arrs = array("player1:", "player2:", "player3:", "player4:");

/**
 * creating an array of symbols(Suits)
 */
$arrayone = array("♣", "♦", "♥", "♠");

/**
 * creating an array of ranks.
 */
$arraytwo = array("2", "3", "4", "5", "6", "7", "8", "9", "10", "jack", "king", "queen", "ace");
/**
 * creating an array
 */
$cards = array();
/**
 * calling the function to storecards with parameters
 */
$cardspack = $object->storecards($cards, $arrayone, $arraytwo);
/**
 * calling the function to shuffle the cards
 */
$cardspack = $object->shufflecards($cardspack, $arrayone, $arraytwo);

/**
 * loop developed to print the cards in a 2-D format.
 */
for ($i = 0; $i < sizeof($cardspack); $i++) {
    echo $arrs[$i];
    for ($j = 0; $j <= 8; $j++) {
        echo $cardspack[$i][$j] . " ";
    }
    echo "\n";
}
