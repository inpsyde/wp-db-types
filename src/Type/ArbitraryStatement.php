<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	StringTheory\Type;

/**
 * Class ArbitraryStatement
 *
 * @package WpDbTypes\Type
 */
class ArbitraryStatement extends Type\MbString implements Statement {

	/**
	 * @return string
	 */
	public function statement() {

		return $this->__toString();
	}
}