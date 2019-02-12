<?php
include 'ShoppingCartVisitor.php';
/**
 * Generating an exception handler.
 */
set_exception_handler(function ($e) {
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
/**
 * Creation of a class which is used to implement the interface cartvisitor
 */
class ShoppingCartImp implements CartVisitor
{
    /**
     * function used to print the details of a book
     * @param indicates The refernece of a class Book
     */
    public function visit(Book $books)
    {
        echo "BookDetails:\n";
        echo "BookName:" . $books->getName() . "\n";
        echo "PriceOfBook:" . $books->getPrice() . "\n";
    }
    /**
     * function used to print the details of a Fruit
     * @param indicates The refernece of a class Fruit
     */
    public function visiting(Fruit $fruit)
    {
        echo "\n";
        echo "FruitDetails" . "\n";
        echo "FruitName:" . $fruit->getName() . "\n";
        echo "Price:" . $fruit->getPrice();

    }
}
