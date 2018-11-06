<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:50
 */

namespace kzorluoglu\solid;


use kzorluoglu\solid\Interfaces\DiscoverablePlane;

class AirplanOne implements DiscoverablePlane {

	public function discover () {
		// TODO: Implement discover() method.
		echo "They can only discover";
	}
}