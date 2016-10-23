<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

use
	StringTheory\Type;

/**
 * Interface Statement
 *
 * A SQL statement (a query that needs to be »prepared«).
 *
 * @package WpDbTypes\Type
 */
interface Statement extends Type\StringType {

	/**
	 * @return string
	 */
	public function statement();
}