<?php
/**
 * @package cleanerDB
 */
namespace cleanerdb\actdec;


class Activate {

	public function __construct() {

		flush_rewrite_rules();

	}

}