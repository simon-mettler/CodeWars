<?php

/**
 * https://www.codewars.com/kata/sum-of-positive/php
 * 
 * You get an array of numbers, return the sum of all of the positives ones.
 * Example [1,-4,7,12] => 1 + 7 + 12 = 20
 * 
 * Note: if there is nothing to sum, the sum is default to 0.
 */

function positive_sum($arr) {
  $sum = 0;

  foreach( $arr as $i ) {
    $i > 0 ? $sum += $i : NULL;
  }

  return $sum;
}

?>