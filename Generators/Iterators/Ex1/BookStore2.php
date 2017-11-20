<?php 

class BookStore2 implements IteratorAggregate
{
    private $books;

    public function __construct()
    {
        $this->books = [
            'Book 1',
            'Book 2',
            'Book 3',
            'Book 4',
            'Book 5',
        ];
    }

    public function getIterator()
    {
        return new ArrayIterator($this->books);
    }
}

$books = new BookStore2();

foreach($books as $key => $value) {
    echo "<strong>[{$key}]</strong> = {$value} \n";
}