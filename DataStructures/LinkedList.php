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
    public  function addfirst($number)
    { 
        $obj=new Node($number);
        $obj->next=$this->head;
        $this->head=$obj;
        $this->size++;
    }
    public function search($number)
    {
        $n=$this->head;
        while($n!=null)
        {
            if($n->data==$number)
            {
                return true;
            }
            $n=$n->next;
        }
        return false;

    }
    public  function deletefirst()
    {
            $n=$this->head;
            $head=$n->next;
            $this->size--;
    }
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
    public  function display()
    {
        $n=$this->head;
        while($n!=null)
        {
            echo $n->data." ";
            $n=$n->next;
        }
    }
    public function getdata()
    {
        $st="";
        $n=$this->head;
        while($n!=null)
        {
            $st=$st.$n->data."  ";
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
