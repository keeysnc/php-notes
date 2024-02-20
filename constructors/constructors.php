<?php

class Product {
   
    public function __construct(public $name = 'Soap', public $price = '100')
    {

    }
    
}

$product = new Product('Soap', 100);

//print $product->name . PHP_EOL;


