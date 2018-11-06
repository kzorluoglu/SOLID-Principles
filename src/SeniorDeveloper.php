<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 16:16
 */

namespace kzorluoglu\solid;


use kzorluoglu\solid\Interfaces\SeniorDeveloperInterface;

class SeniorDeveloper implements SeniorDeveloperInterface {
	public function makeProject () {
		// TODO: Implement makeProject() method.
		echo "Make Project";
	}
	public function useSOLIDPrinciples () {
		// TODO: Implement useSOLIDPrinciples() method.
		echo "but they musst be with SOLID Principles maked";
	}
}