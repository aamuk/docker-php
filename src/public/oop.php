<?php

echo "<h1><u>OOP</u></h1><p><i>Page <strong>25</strong></i></p><hr>";

class ShopProduct {
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;
}

$product1 = new ShopProduct();
$product2 = new ShopProduct();

$product1->title = "lol";

echo $product1->title;

