<?php # -*- coding: utf-8 -*-

namespace WpDbTypes\Type;

/**
 * Interface Table
 *
 * @package WpDbTypes\Type
 */
interface Table {

	/**
	 * @return string
	 */
	public function name();

	/**
	 * @return string
	 */
	public function __toString();
}