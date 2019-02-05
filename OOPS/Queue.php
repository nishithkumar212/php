<?php
class Node
{
    public $data;
    public $next;
    /**constructor initializing the variables  */
    public function __construct($number) 
    {
        $this->data = $number;
        $this->next = null;
    }
}
class Queue
{
    public $front;
    public $rear;
    public $length;
    /** adding the element in to the stack  */
    public function enqueue($number) 
    {
        $obj= new Node($number);
        if ($this->isEmpty()) 
        {
            $this->front = $obj;
        } 
        else
         {
            $this->rear->next = $obj; 
         }
        $this->rear = $obj;
        $this->length++;
    }
    /** checking the condition  */
    public function isEmpty() 
    {
        if ($this->front == null) 
        {
            return true;
        }
        return false;
    }
    /** dequing the element of a queue */
    public function dequeue() 
    {
        if (!$this->isEmpty())
        {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else 
        {
            echo " queue underflow\n";
        }
        if ($this->front == null) {
            $rear = null;
        }
        $this->length--;
        return $val;
    }
    public function dequeue2()
    {
        if (!$this->isEmpty()) 
        {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else 
        {
            echo " queue underflow\n";
        }
        if ($this->front == null) {
            $rear = null;
        }
        $this->length--;
       // return $val;
    }
    public function dequeue1()
    {
        if (!$this->isEmpty()) {
            $val = $this->front->data;
            $this->front = $this->front->next;
        } else 
        {
            echo " queue underflow\n";
        }
        if ($this->front == null) {
            $rear = null;
        }
       // $this->length--;
        return $val;
    }
    /** function to check the size of an queue */
    public function size() 
    { 
        return $this->length;
    }
    /** function to display the elements of a queue */
    public function display() 
    {
        $temp = $this->front;
        while ($temp != null) 
        {
            echo $temp->data . " ,";
            $temp = $temp->next;
        }
        
    }    
    public function peek() 
    /** function to retieve element of a queue */
    {
        return $this->front->data;
    }
}
