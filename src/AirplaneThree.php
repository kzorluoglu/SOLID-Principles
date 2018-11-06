<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:51
 */

namespace kzorluoglu\solid;


use kzorluoglu\solid\Interfaces\DiscoverablePlane;
use kzorluoglu\solid\Interfaces\ShootablePlane;

class AirplaneThree implements ShootablePlane, DiscoverablePlane {

	public function shoot () {
		// TODO: Implement shoot() method.
		echo "This can shooting";
	}

	public function discover () {
		// TODO: Implement discover() method.
		echo " and can at the same time discover";
	}
}