<?php

echo "<h1><u>OOP</u></h1><p><i>Page <strong>34</strong></i></p><hr>";

class ShopProduct
{
    public function __construct(
        public $title,
        public $firstName,
        public $mainName,
        public $price
    ) {
    }

    public function getProducer()
    {
        return $this->firstName . " " . $this->mainName;
    }
}

$product1 = new ShopProduct(
    "Pear",
    "Alex",
    "Beaumont",
    1
    );

echo($product1->getProducer());