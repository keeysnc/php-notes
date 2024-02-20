## Primative Types

//boolean
//integer
//float
//string
//object
//resource
//array
//null

## Notes

- classes can be data types (ex. a Song class can be of type Song of object)

## var dump

- var_dump(); - inspect variables

## strict - stops PHP from converting types (meeds to go in file where code is called)

declare(strict_types=1);

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

## PHP EOL

makes a new line

## Concatenation

`.=`
ex.
`$string = "{$this->title}, {$this->author}";`
`$string .= "Weight: {$this->weight}"`
