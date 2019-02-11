<?php
set_exception_handler(function ($e) 
{
    echo "\nException Occurred\n";
    echo $e->getMessage();
}
);
include_once ('ItemElement.php');
include_once ('Book.php');
include_once ('Fruit.php');
include_once ('ShoppingCartImp.php');
function clientCode(array $components, CartVisitor $visitor)
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }
}
$components = [
    new Book("nishith",2000),
    new Fruit("mango",120)
];
$visitor1 = new ShoppingCartImp;
clientCode($components, $visitor1);
?>
