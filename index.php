<?php
/**
 * Created by PhpStorm.
 * User: koray
 * Date: 06.11.18
 * Time: 14:57
 */

require_once "vendor/autoload.php";

// Single Responsibility
$imageUplaoder = new \kzorluoglu\solid\ImageUploader("Image");
$imageUplaoder->validate()->resize()->upload();


// Open/Close Principle
$reval = new \kzorluoglu\solid\Reval();
//or
$turkish = new \kzorluoglu\solid\TurkishTea();

$teaMaker = new \kzorluoglu\solid\TeaMaker($reval);
$revalTea = "Reval's tea maked : **** ". $teaMaker->makeTea();

$teaMaker = new \kzorluoglu\solid\TeaMaker($turkish);
$turkishTea = "Turkish Tea maked : **** ". $teaMaker->makeTea();

echo $revalTea .", ". $turkishTea;