<?php
require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook('A Random Book', 'Jane Doe', 1000, 100);
// $digitalBook = new DigitalBook('A Random Book', 'Jane Doe', 1000, 100);

print $physicalBook->getAuthor() . PHP_EOL;
// print $digitalBook->getAuthor() . PHP_EOL;

