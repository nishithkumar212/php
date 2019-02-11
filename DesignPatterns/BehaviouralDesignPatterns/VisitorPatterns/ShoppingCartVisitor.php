<?php
include_once ('Book.php');
include_once ('Fruit.php');
interface CartVisitor 
{
    public function visit(Book $book);
    public function visiting(Fruit $fruit);
}
?>
