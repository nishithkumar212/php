<?php
include_once 'Subject.php';
/**
 * Generating an exception Handler.
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * Creation of a class named product which is used to extend the abstract class named subject
 */
class Product extends subject
{
    //Declaring and assigigning a variable with null
    private $favoritePatterns = null;
    //Creation of an array
    private $observers = array();
/**
 * Creation of a function named registerObserver
 * @param indicates the users references to register_in and storing in an array
 */
    public function registerObserver(Observer $observer_in)
    {
        $this->observers[] = $observer_in;
    }
/**
 * Creation of a function named removeObserver
 * @param indicates the users references to remove_in and  removing from an storage array
 */
    public function removeobserver(Observer $observer_in)
    {
        //foreach loop to evaluate
        foreach ($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }
/**
 * method which is used to take each and every register observer and used to call the update method
 * @param indicates in the function that current observer gets an update when there is a change
 */
    public function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }
/**
 * method which is used to update the Registered user
 * @param indicates parameter passed by the user
 * notify method used to call, the update method of current observer
 */
    public function updateFavorites($newFavorites)
    {
        $this->favorites = $newFavorites;
        $this->notify();
    }
    /**
     * function used to return the variable contained data.
     */
    public function getFavorites()
    {
        return  $this->favorites;
    }
}
