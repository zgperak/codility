<?php
/**
 * Created by PhpStorm.
 * User: zgper
 * Date: 24.11.2017.
 * Time: 0:33
 */

function solution(array $A):int {
	// write your code in PHP7.0
	$totalCarsGoingWest = 0;
	foreach($A as $carGoingWest){
		$totalCarsGoingWest += $carGoingWest; // because going east would be 0
	}

	$passedWest = 0;
	$passingCars = 0;

	foreach($A as $carGoingWest){
		if($carGoingWest){
			$passedWest++;
			continue;
		}
		$passingCars += ($totalCarsGoingWest - $passedWest);
		if($passingCars>1000000000) return -1;

	}

	return $passingCars;

}