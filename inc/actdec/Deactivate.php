<?php
/**
 * @package cleanerDB
 */

namespace cleanerdb\actdec;


class Deactivate {

	public function __construct() {

		flush_rewrite_rules();

	}

}