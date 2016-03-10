<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	PHPUnit_Framework_TestCase;

/**
 * Class ArbitraryStatementTest
 *
 * @package WpDbTypes\Type
 */
class ArbitraryStatementTest extends PHPUnit_Framework_TestCase {

	/**
	 * @covers ArbitraryStatement::statement
	 */
	public function test_contains() {

		$string = "SELECT * FROM TABLE WHERE `colum` LIKE '%Übertest%'";
		$testee = new ArbitraryStatement( $string );

		$this->assertSame(
			$string,
			$testee->statement()
		);
	}
}
