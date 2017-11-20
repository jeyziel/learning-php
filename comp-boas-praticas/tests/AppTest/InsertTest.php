<?php 

namespace AppTeste;


use App\Insert;
use PHPUnit\Framework\TestCase;

class InsertTest extends TestCase
{
	private $obj = null;

	public function setUp()
	{
		parent::setUp();
		$this->obj = new Insert();
	}

	public function tearDown()
	{
		parent::tearDown();
		$this->obj = null;
	}

	/**
	*@dataProvider dataProvider
	*/
	public function testSqlInsert($data, $expected)
	{
		//$expected = 'INSERT INTO user (user, email) VALUES (jeyziel, jeyziel_21@hotmail)';
		$this->obj->setTable('user');
		$this->obj->setData($data);
		$this->assertEquals($expected, $this->obj->getSql() );
	}

	public function dataProvider()
	{
		return [
			[
				['user' => 'jeyziel', 'email' => 'jeyziel_21@hotmail'],
				'INSERT INTO user (user, email) VALUES (jeyziel, jeyziel_21@hotmail)',
			],
		];
	}



}