<?php
require_once __DIR__ . "/../vendor/autoload.php";
require_once __DIR__ . "/../classes/Calculate.php";

use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
	public function test_total_40_receive_50_change_10()
	{
		$cal = new Calculate();
		$res = $cal->getChange(10);
		$this->assertInternalType('array', $res);
		$this->assertEquals(5, count($res));
		$res_1 = $res["bank500"];
		$res_2 = $res["bank100"];
		$res_3 = $res["bank50"];
		$res_4 = $res["bank20"];
		$res_5 = $res["bank10"];

		$this->assertEquals(0, $res_1);
		$this->assertEquals(0, $res_2);
		$this->assertEquals(0, $res_3);
		$this->assertEquals(0, $res_4);
		$this->assertEquals(1, $res_5);
	}
}