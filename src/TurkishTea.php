<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:30
 */

namespace kzorluoglu\solid;


use kzorluoglu\solid\Interfaces\TeaInstructionsInterface;

class TurkishTea implements TeaInstructionsInterface {

	public function makeTea () {
		return "Black Tea with sugar";
	}
}