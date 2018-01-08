<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2018-01-08
 * Time: 22:58
 */

namespace cleanerdb\actdec;


class Deactivate {

	public function __construct() {

		flush_rewrite_rules();

	}

}