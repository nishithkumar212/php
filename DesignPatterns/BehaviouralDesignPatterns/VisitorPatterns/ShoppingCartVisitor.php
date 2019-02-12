<?php
/**
 * including all the files
 */
include_once 'Book.php';
include_once 'Fruit.php';
/**
 * Creation of an interface named Visitor
 * Generating the abstract methods.
 */
interface CartVisitor
{
    public function visit(Book $book);
    public function visiting(Fruit $fruit);
}
