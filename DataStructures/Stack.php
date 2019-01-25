<?php
class Node
{
    public $next;
    public $data;
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

    public function pop()
    {
        if ($this->top == null) {
            echo "stack underflow \n";
            exit;

        }
        $result = $this->top->data;
        
        $this->top=$this->top->next;
        $this->length--;
        return $result;
    }

    public function display()
    {
    
        $n = $this->top;
        $i=0;
        if ($n == null) {
         echo "stack is empty\n";
         exit;
        }
        while ($n != null) {
           echo $n->data. "  ";
           $n = $n->next;
        }
        return $array2;
    }

    public function size()
    {
        $this->length;
    }
    public function isEmpty()
    {
          return $this->top == null;
        
    }

    public function peek()
    {
        if (!$this->isEmpty()) {
            return $this->top->data;
        } else {
            echo "stack is empty:";
        }
    }
}
$objects = new Stack;
// for($i=0;$i<10;$i++)
// {
//     $objects->push($i);
// }

// $objects->push(20);
// $objects->push(30);
// $objects->push(40);
// $objects->push(50);
 //$objects->display();
