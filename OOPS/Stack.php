<?php
class Node
{
    public $next;
    public $data;
    /**constructor initializing the variables  */
    public function __construct($number) 
    {
        $this->data = $number;
        $this->next = null;
    }
}
class Stack
{
    public $top;
    public $length = 0;
    /**pushing the elements in to the stack  */
    public function push($number) 
    {
        $obj = new Node($number);
        if ($this->top == null) {
            $this->top = $obj;
        } else {
            $obj->next = $this->top;
            $this->top = $obj;
        }
        $this->length++;
    }
    /** poping the elemnets in to the stack  */
    public function pop() 
    {
        if ($this->top == null) 
        {
            echo "stack underflow \n";
            exit;

        }
        $result = $this->top->data;
        
        $this->top=$this->top->next;
        $this->length--;
        return $result;
    }
    /** displaying the elements in to the stack  */
    public function display() 
    {
    
        $n = $this->top;
        $i=0;
        if ($n == null) {
         echo "stack is empty\n";
         exit;
        }
        while ($n != null) {
           echo $n->name.", ";
           echo $n->data->share.",";
           echo $n->data->price;
           $n = $n->next;
        }
       // return $array2;
    }
    /** returning the size of  a stack  */
    public function size() 
    {
        $this->length;
    }
    public function isEmpty()
    {
          return $this->top == null;
        
    }
    /** retrieving the element of a stack  */
    public function peek() 
    {
        if (!$this->isEmpty()) {
            return $this->top->data;
        } else {
            echo "stack is empty:";
        }
    }
}