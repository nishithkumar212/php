<?php
/**
 * Creation of an abstract class named Subject
 * Creation of an abstract methods in it
 * registerObserver() method indicates to register the customer to get update
 * removeObserver() method indicates to remove the customer that he will not get update further
 * notify() method is used to give the update for the registered customers.
 */
abstract class Subject
{
    abstract public function registerObserver(Observer $observer_in);
    abstract public function removeObserver(Observer $observer_in);
    abstract public function notify();
}
