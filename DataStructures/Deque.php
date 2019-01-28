<?php
/**
* Purpose: program for Deque.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
class Node
{
    public $next;
    public $previous;
    public $data;
    public function __construct($number)
    {
        $this->data = $number;
        $this->next = null;
    }
}
class Deque
{
    public $head;
    public $tail;
    public function addFront($number) // adding to the front of the deque
    {
        $obj = new Node($number);
        if ($this->isEmpty()) 
        {
            $this->tail = $new_node;
        } else
         {
            $this->head->previous = $new_node;
         }
        $new_node->next = $this->head;
        $this->head = $new_node;
    }
    public function removeRear() // removing the next rear of an element
    {
        $temp = $this->tail;
        if ($this->head == $this->tail)
        {
            $this->head = null;
        } else 
        {
            $this->tail->previous->next = null;
        }
        $val = $this->tail->data;
        $this->tail = $this->tail->previous;
        $temp->previous = null;
        return $val;
    }
    public function addRear($item)// adding the next rear element in to the queue
    {
        $new_node = new Node($item);
        if (!$this->isEmpty()) 
        {
            $this->tail->next = $new_node;
        } else
        {
            $this->head = $new_node;
        }
        $new_node->previous = $this->tail;
        $this->tail = $new_node;
    }
    public function removeFront() // removing the front eleement in the ueue
    {
        $temp = $this->head;
        if ($this->head == $this->tail)
         {
            $this->tail = null;
         }
        if ($this->isEmpty()) 
         {
            echo "underflow\n";
         } 
         else
          {
            $this->head->next->previous = null;
          }
        $this->head = $this->head->next;
        $this->temp->next = null;
    }
    public function isEmpty() // checking wheteher it is empty or not
    {
        if ($this->head == null)
         {
            return true;
         }
        return false;
    }

    public function displayForward() // dispalying the linkedlist in forward direction
    {
        $temp = $this->head;
        if ($temp == null) 
         {
            echo "underflow\n";
         }
        while ($temp != null)
         {
            echo $temp->data . " ";
            $temp = $temp->next;
         }
    }
    public function displayReverse() //displaying the linkedlist in reverse direction
    {
        $temp = $this->tail;
         while ($temp != null)
          {
            echo $temp->data . " "; // printing the element
            $temp = $temp->previous;
        }
    }
}
$obj = new Deque;
// $obj->addRear(10);
// $obj->addRear(20);
// $obj->addRear(30);
// $obj->addRear(40);
// $obj->displayForward();
