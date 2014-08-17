<?php

class ExampleTest extends \PHPUnit_Framework_TestCase
{
	public static function setUpBeforeClass()
	{
		echo __METHOD__ . "\n";
	}

	public static function tearDownAfterClass()
	{
		echo __METHOD__ . "\n";
	}

	public function setUp()
	{
		$this->variable = true;
		echo __METHOD__ . "\n";
	}

	public function tearDown()
	{
		echo __METHOD__ . "\n\n";
	}

	public function test1()
	{
		echo __METHOD__ . "\n";
		for ($i=0; $i < 100; $i++) { 
			$this->assertTrue(true);
		}
	}

	public function test2()
	{
		print __METHOD__ . "\n";
	}

	public function test3()
	{
		echo __METHOD__ . "\n";
	}

	public function test4()
	{
		echo __METHOD__ . "\n";
	}

	public function test5()
	{
		echo __METHOD__ . "\n";
	}
}