<?php
/**
* Purpose: program for linkedlist.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
class Node
{
     public    $data;
     public   $next;
     /**
      * constructor for initializinf the variables
      */
    public function __construct($d) 
    {
        $this->data=$d;
        $this->next=null;
    }
}
class LinkedList
{
    public  $head;
    public $size;
    /**
     *   function for adding the element in the queue
     */
    public  function add($number) 
    {
        if ($this->head == null)
        {
            $this->head=new Node($number);
        }
        else
        {
            $n=$this->head;
            while($n->next!=null)
            {
                $n=$n->next;
            }
            $n->next = new Node($number);
        }
        $this->size++;
    }

    /**
     *  function for adding to the first of a queue
     */
    public  function addfirst($number) 
    { 
        $obj=new Node($number);
        $obj->next=$this->head;
        $this->head=$obj;
        $this->size++;
    } 
    /**
     *function for searching the given element in the linkedlist 
     */   
    public function search($key1)
    {
        $n=$this->head;
        while($n!=null)
        {
            if(($n->data)==$key1)
            {
                return true;
            }
            $n=$n->next;
        }
        return false;
    }
    /**
     *  function for deleting the first element in the linkedlist 
     */
 
    public  function deletefirst()
    {
            $n=$this->head;
            $head=$n->next;
            $this->size--;
    }
    /**
     *  function for deleting the specific element in the queue.   
     */
    public function delete($key)
    {
        $temp=$this->head;
        while($temp!=null && $temp->data==$key)
        {
            $head=$temp->next;
        }
        while($temp!=null && $temp->data!=$key)
        {
            $previous=$temp;
            $temp=$temp->next;
        }
            $previous->next=$temp->next;
            $this->size--;
    }

    /**
     * function for inserting the element at certain position in the queue.   
     */
    public  function  insert($position,$number)
    {
        $n=$this->head;
        $count=1;
        while($count<$position-1)
        {
            $n=$n->next;
            $count++;
        }
        $obj=new Node($number);
        $current=$n->next;
        $obj->next=$current;
        $n->next=$obj;
        $this->size++;
    }
    /**
     * function for dispalying all the elements in the linkedlist. 
     */
    public  function display()
    {
        $n=$this->head;
        while($n!=null)
        {
            echo $n->data." ";
            $n=$n->next;
        }
    }
    /**
     *  function to retrieve the data in the linkedlist 
     */
    public function getdata()
    {
        $st="";
        $n=$this->head;
        while($n!=null)
        {
            $st=$st.$n->data." ";
            $n=$n->next;
        }
     return $st;
    }
    public function linkeddisplay()
    {
        $llr=array();
        $n=$this->head;
        $i=0;
        while($n!=null)
        {
            $llr[$i]=$n->data;
            $n=$n->next;
            $i++;
        }
        return $llr;
    }
    /**
     *  function to calculate the size of a queue. 
     */
    public function size()
    {
         return $this->size;
    }
}
$object= new LinkedList;
// $object->add(5);
// $object->add(10);
// $object->add(15);
// $object->add(20);
// $object->add(30);
// $object->addfirst(25);
// $object->deletefirst();
// $object->insert(3,35);
// $object->insert(7,40);
// $object->display();
?>
