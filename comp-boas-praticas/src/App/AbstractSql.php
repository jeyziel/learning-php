<?php 

namespace App;

abstract class AbstractSql
{
	protected $sql = '';
	private $table = '';
	private $fields = [];

	/**
	* return sql
	*@return String
	*/
	public function getSql() : String 
	{
		$this->process();
		return $this->sql;
	}

	/**
	*return the table
	*@return String
	*/
	public function getTable() : String 
	{
		return $this->table;
	}

	/**
	*return the fields
	*@return array
	*/
	public function getFields() : array 
	{
		return $this->fields;
	}

	/**
	*@param string $table
	*@param array $fields
	*return AbstractSql 
	*/
	public function setTable(String $table, array $fields = ['*']) : self 
	{
		$this->table = $table;
		$this->fields = $fields;
		return $this;
	}

	abstract public function setData($data);
	abstract protected function process();

}