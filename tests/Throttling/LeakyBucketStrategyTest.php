<?php

namespace BehEh\Flaps\Throttling;

class LeakyBucketStrategyTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @covers BehEh\Flaps\Throttling\LeakyBucketStrategy::parseTime
	 */
	public function testParseTime() {
		$this->assertEquals(0, LeakyBucketStrategy::parseTime(0));
		$this->assertEquals(0, LeakyBucketStrategy::parseTime('0'));
		$this->assertEquals(0, LeakyBucketStrategy::parseTime('0s'));
		$this->assertEquals(1, LeakyBucketStrategy::parseTime(1));
		$this->assertEquals(1, LeakyBucketStrategy::parseTime('1'));
		$this->assertEquals(1, LeakyBucketStrategy::parseTime('1s'));
		$this->assertEquals(2, LeakyBucketStrategy::parseTime('2s'));
		$this->assertEquals(60, LeakyBucketStrategy::parseTime('1m'));
		$this->assertEquals(90, LeakyBucketStrategy::parseTime('1.5m'));
		$this->assertNull(LeakyBucketStrategy::parseTime('invalid'));
		$this->assertNull(LeakyBucketStrategy::parseTime('1 m'));
		$this->assertNull(LeakyBucketStrategy::parseTime('1k'));
	}

}