
<?php
class Node
{
    public $data;
    public $next;
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
    public function enqueue($number)
    {
        $obj= new Node($number);
        if ($this->isEmpty()) 
        {
            $this->front = $obj;
        } else
         {
            $this->rear->next = $obj;
        }
        $this->rear = $obj;
        $this->length++;
    }
    public function isEmpty()
    {
        if ($this->front == null) {
            return true;
        }
        return false;
    }
    public function dequeue()
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
        $this->length--;
        return $val;
    }
    public function dequeue2()
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
    public function size()
    {
        return $this->length;
    }
    public function display()
    {
        $temp = $this->front;
        while ($temp != null) {
            echo $temp->data . " ";
            $temp = $temp->next;
        }
        
    }
    
    public function peek()
    {
        return $this->front->data;
    }
}
// $objects=new Queue;
// $objects->enqueue(10);
// $objects->enqueue(20);
// $objects->enqueue(30);
// $objects->enqueue(40);
// $objects->enqueue(50);
// $objects->enqueue(60);
// $objects->display();
// // for($i=0;$i<$objects->size();$i++)
// // {
// //     $value=$objects->peek();
// //     echo $value;
// // }
// echo $objects->peek();
