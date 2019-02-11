<?php
include('ShoppingCartVisitor.php');
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
class ShoppingCartImp implements CartVisitor 
{
    public function  visit(Book $books)
     {
        echo "BookDetails:\n";
        echo "BookName:".$books->getName()."\n";
        echo "PriceOfBook:".$books->getPrice()."\n";
    }
    public function visiting(Fruit $fruit)
    {
        echo "\n";
        echo "FruitDetails"."\n";
        echo "FruitName:".$fruit->getName()."\n";
        echo "Price:".$fruit->getPrice();

    }
}
?>
