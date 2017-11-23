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

    sort($A);

    for($i = 0; $i<$br; $i+=2)
        if($A[$i]!=$A[$i+1])
            return $A[$i];
}