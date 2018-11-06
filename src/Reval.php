<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:01
 */

namespace kzorluoglu\solid;
use kzorluoglu\solid\Interfaces\TeaInstructionsInterface;

class Reval implements TeaInstructionsInterface{

	public function makeTea(){
		return "Tea bag no sugar and no milk";
	}
}