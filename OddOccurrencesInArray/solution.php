<?php
/**
 * Created by PhpStorm.
 * User: zgper
 * Date: 24.11.2017.
 * Time: 0:34
 */

function solution(array $A):int{
	// write your code in PHP7.0
	$br = count($A);

	if($br==1)
		return $A[0];

	$temporaryArray = [];

	foreach ($A as $elem){
		if(!isset($temporaryArray[$elem]))  $temporaryArray[$elem] = 0;
		$temporaryArray[$elem]++;
	}

	foreach ($temporaryArray as $elem=>$count){
		if($count%2!=0)
			return $elem;
	}

}