## PHP EOL

new line
ex. `var_dump( $some_variable . PHP EOL )`

## $this

references the object instance that's calling the method

````class Product {
    public $name = 'soap';
    public $price = 2;
    //you dont need to assign a property
    public $emptyPropery;

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }
}```
````
