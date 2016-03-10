<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	PHPUnit_Framework_TestCase;

/**
 * Class TableTest
 *
 * @package WpDbTypes\Type
 */
class TableTest extends PHPUnit_Framework_TestCase {

	/**
	 * Test if the interface is detected by the auto loader config
	 */
	public function test_interface_exists() {

		$this->assertSame(
			__NAMESPACE__ . '\Table',
			Table::class
		);
	}
}
