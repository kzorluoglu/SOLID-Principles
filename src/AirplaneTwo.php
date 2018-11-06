<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:51
 */

namespace kzorluoglu\solid;

use kzorluoglu\solid\Interfaces\ShootablePlane;

class AirplaneTwo implements ShootablePlane {

	public function shoot () {
		// TODO: Implement shoot() method.
		echo "They can only Shoot";
	}
}