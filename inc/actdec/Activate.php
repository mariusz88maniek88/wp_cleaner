<?php
/**
 * Created by PhpStorm.
 * User: Maniek
 * Date: 2018-01-08
 * Time: 22:32
 */
namespace cleanerdb\actdec;


class Activate {

	public function __construct() {

		flush_rewrite_rules();

	}

}