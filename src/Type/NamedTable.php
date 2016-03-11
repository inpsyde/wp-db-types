<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	StringTheory\Type;

/**
 * Class NamedTable
 *
 * @package WpDbTypes\Type
 */
class NamedTable extends Type\MbString implements Table {

	/**
	 * @return string
	 */
	public function name() {

		return $this->__toString();
	}

}