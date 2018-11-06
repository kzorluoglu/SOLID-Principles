<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 15:57
 */

namespace kzorluoglu\solid;


class War {

	protected $shootableAirplanes;
	protected $discoverableAirplanes;

	public function __construct () {
		$this->discoverableAirplanes[] = new AirplanOne();
		$this->discoverableAirplanes[] = new AirplaneThree();

		$this->shootableAirplanes[] = new AirplaneTwo();
		$this->shootableAirplanes[] = new AirplaneThree();
	}

	public function makeDiscover(){
		foreach ($this->discoverableAirplanes as $airplane){
			$airplane->discover();
		}
	}

	public function startShoot(){
		foreach ($this->shootableAirplanes as $airplane){
			$airplane->shoot();
		}
	}

}