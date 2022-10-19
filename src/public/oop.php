<?php

echo "<h1><u>OOP</u></h1><p><i>Page <strong>31</strong></i></p><hr>";

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }
}

$product1 = new ShopProduct(
    "Banana",
    "Smith",
    "Dave",
    12
    );