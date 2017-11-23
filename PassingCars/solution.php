<?php
/**
 * Created by PhpStorm.
 * User: zgper
 * Date: 24.11.2017.
 * Time: 0:33
 */

function solution(array $A):int {
    // write your code in PHP7.0
    $totalArraySum = array_sum($A);
    $passed = 0;
    $solution = 0;
    foreach($A as $car){
        if($car){
            $passed++;
            continue;
        }
        $solution += ($totalArraySum - $passed);
        if($solution>1000000000) return -1;

    }

    return $solution;

}