<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 16:43
 */

namespace kzorluoglu\solid;


class Log {

	protected $logger;

	public function __construct ( ) {
		$this->logger = new FileLogger();
	}
	public function save(){
		$this->logger->save();
	}
}