<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:00
 */

namespace kzorluoglu\solid;
use kzorluoglu\solid\Interfaces\TeaInstructionsInterface;

class TeaMaker {

	protected $instructor;

	public function __construct (TeaInstructionsInterface $instructor) {
		$this->instructor = $instructor;
	}

	public function makeTea(){
		return $this->instructor->makeTea();
	}
}