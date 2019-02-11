<?php
include_once ('Subject.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class Product extends  subject
{
    private  $favoritePatterns=null;
    private $observers = array();

public function registerObserver(Observer $observer_in)
{
    $this->observers[] = $observer_in;
}
public function removeobserver(Observer $observer_in)
{
    foreach($this->observers as $okey => $oval)
     {
        if ($oval == $observer_in)
         { 
          unset($this->observers[$okey]);
        }
      }
}
public function notify()
{
    foreach($this->observers as $obs) 
    {
        $obs->update($this);
      }
    }
public function updateFavorites($newFavorites)
{
    $this->favorites=$newFavorites;
    $this->notify();
}
public function getFavorites()
{
    return $this->favorites;
}
}
?>