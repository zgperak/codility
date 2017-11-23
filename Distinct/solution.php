<?php
/**
 * Created by PhpStorm.
 * User: zgper
 * Date: 24.11.2017.
 * Time: 0:35
 */

function solution(array $A):int {
    // write your code in PHP7.0
    return count(array_unique($A));
}