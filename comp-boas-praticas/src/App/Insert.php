<?php 

namespace App;

use App\AbstractSql;

class Insert extends AbstractSql
{
	private $keys = [];
	private $values = [];

	public function __construct()
	{
		$this->sql = 'INSERT INTO %s (%s) VALUES (%s)';
	}

	public function setData($data)
	{
		$this->setkeys( array_keys($data) );
		$this->setValues( array_values($data) );
	}

	protected function getKeys()
	{
		return implode(', ', $this->keys );
	}

	protected function setkeys(array $keys)
	{
		$this->keys = $keys;
		return $this;
	}

	protected function getValues()
	{
		return implode(', ', $this->values );
	}

	protected function setValues(array $values)
	{
		$this->values = $values;
		return $this;
	}

	protected function process()
	{
		$sql = $this->sql;
		$this->sql = sprintf($sql, $this->getTable(), $this->getKeys(), $this->getValues());
	}
}