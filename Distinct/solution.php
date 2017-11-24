<?php
/**
 * Created by PhpStorm.
 * User: zgper
 * Date: 24.11.2017.
 * Time: 0:35
 */

function solution(array $A):int {
    // write your code in PHP7.0
	$distincArr = [];
	$count = 0;
    foreach ($A as $value){
    	if(!isset($distincArr[$value])){
    		$count++;
    		$distincArr[$value] = "";
		}
	}

	return $count;
}