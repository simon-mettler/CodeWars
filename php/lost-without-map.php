<?php

/**
 * https://www.codewars.com/kata/57f781872e3d8ca2a000007e/php
 * 
 * Given an array of integers, return a new array with each value doubled.
 */

function maps($x) {
  
  $arr = [];
  
  for($i=0; $i<count($x); $i++) {
    array_push($arr, $x[$i]*2);
  }

  return $arr;

}

?>