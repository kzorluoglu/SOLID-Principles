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

// Liskov Substitution

$war = new \kzorluoglu\solid\War();
$war->makeDiscover();
$war->startShoot();


// Interface Segregation
$seniorDeveloper = new \kzorluoglu\solid\SeniorDeveloper();
$seniorDeveloper->makeProject();
$seniorDeveloper->useSOLIDPrinciples();
$juniorDeveloper = new \kzorluoglu\solid\JuniorDeveloper();
$juniorDeveloper->makeProject();

// Dependency Inversion

$log = new \kzorluoglu\solid\Log();

