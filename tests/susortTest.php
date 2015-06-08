<?php

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-08-25 at 12:28:08.
 */
class susortTest extends PHPUnit_Framework_TestCase {

	public static function compare_integer($a, $b) {
		return $a[1] - $b[1];
	}
		
	/**
	 * Untestable on PHP 5.3
	 * @covers sasort
	 * @group  stablesort
	 * @requires PHP 5.4 
	 */
	public function testAssociation() {
		$source = array(
			'a'	=> array('red', 3),
			'b'	=> array('green', 2),
			'c'	=> array('blue', 2),
			'd'	=> array('yellow', 1),
		);
		
		$expected = array(
			0 => array('yellow', 1),
			1 => array('green', 2),
			2 => array('blue', 2),
			3 => array('red', 3),
		);
		
		$array = $source;
		usort($array, array(__CLASS__, 'compare_integer'));
		$this->assertNotSame($expected, $array);
		
		$array = $source;
		susort($array, array(__CLASS__, 'compare_integer'));
		$this->assertSame($expected, $array);
	}
}
