<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 14:41
 */

/**
 * Class ImageUploader
 *
 * Single Responsibility
 */
class ImageUploader {

	protected $image;

	function __construct($image){
		$this->image = $image;
	}

	public function validate(){
		//validate operation is here
		return $this;
	}

	public function resize(){
		//resize operation is here
		return $this;
	}

	public function upload(){

		$uploaded = true;

		if($uploaded){
			echo $this->image. "Uploaded";
		}
	}
}

$imageUpload = new ImageUploader("Image");

$imageUpload->validate()->resize()->upload();