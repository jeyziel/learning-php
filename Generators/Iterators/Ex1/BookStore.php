<?php 

class BookStore implements Iterator
{
	private $books = [];
	private $index;

	public function __construct()
	{
		$this->index = 0;
		$this->books = [
			'book1',
			'book2',
			'book3',
			'book4',
		];
	}

	public function current()
	{
		return $this->books[$this->index];
	}

	public function key()
	{
		return $this->index;
	}

	public function next()
	{
		return $this->index++;
	}

	public function rewind()
	{
		$this->index = 0;
	}

	public function valid()
	{
		return array_key_exists($this->index, $this->books);
	}
}

$books = new BookStore();

// while ($books->valid()) {
//     echo "<strong>[{$books->key()}]</strong> = {$books->current()} \n";

//     $books->next();
// }

// for ($books->rewind(); $books->valid(); $books->next()) {
//     echo "<strong>[{$books->key()}]</strong> = {$books->current()} <br>";
// }

//reconhece quando o objeto implementa a interface Traversable e trata de avançar o cursor e recuperar os valores automaticamente
foreach($books as $key => $value) {
    echo "<strong>[{$key}]</strong> = {$value} \n";
}