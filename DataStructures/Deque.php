<?php
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
    public function addFront($number)
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
    public function removeRear()
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
    public function addRear($item)
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
    public function removeFront()
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
    public function isEmpty()
    {
        if ($this->head == null)
         {
            return true;
         }
        return false;
    }

    public function displayForward()
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
    public function displayReverse()
    {
        $temp = $this->tail;
         while ($temp != null)
          {
            echo $temp->data . " ";
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
