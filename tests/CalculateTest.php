<?php
require_once __DIR__ . "/../classes/Calculate.php";

use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
	public function test()
	{
		$cal = new Calculate();
		$this->assertEquals(null, $cal->getChange());
	}
}