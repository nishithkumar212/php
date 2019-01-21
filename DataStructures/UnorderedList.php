<?php
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

    }
    public  function addfirst($number)
    { 
        $obj=new Node($number);
        $obj->next=$this->head;
        $this->head=$obj;
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
            $n=$n.next;
        }
        return false;

    }
    public  function deletefirst()
    {
            $n=$this->head;
            $head=$n->next;
    }
    public function deletecertain($position)
    {
        
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
}
$object= new LinkedList;
$object->add(5);
$object->add(10);
$object->add(15);
$object->add(20);
$object->add(30);
$object->addfirst(25);
$object->deletefirst();
$object->insert(3,35);
$object->display();
?>
