<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	StringTheory\Type;

/**
 * Interface Table
 *
 * @package WpDbTypes\Type
 */
interface Table extends Type\String {

	/**
	 * @return string
	 */
	public function name();
}