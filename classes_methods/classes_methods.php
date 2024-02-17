<?php

// class Product {

// }

// // creating object from class
// $product = new Product();
// $anotherProduct = new Product();
// var_dump($product);
// var_dump($anotherProduct);

class Product {
    public $name = 'soap';
    public $price = 2;
    //you dont need to assign a property
    public $emptyPropery;

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }
}

$soapObject1 = new Product();
$soapObject2 = new Product();

$soapObject1->price = 200;
$soapObject1->price = 500;

$priceAsCurrency1 = $soapObject1->priceAsCurrency();
$priceAsCurrency2 = $soapObject2->priceAsCurrency();

var_dump('price as currency' . $priceAsCurrency1 . PHP_EOL);
var_dump('price as currency' . $priceAsCurrency2 . PHP_EOL);

// access properies within object with ->
// $soapObject->name = 'toothpaste' . "\n";
// print $soapObject->name;