<?php
abstract class  Subject
{
 abstract  function registerObserver(Observer $observer_in);
 abstract  function removeObserver(Observer $observer_in);
 abstract  function notify();
}
?>