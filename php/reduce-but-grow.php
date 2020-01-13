<?php

/**
 * https://www.codewars.com/kata/57f780909f7e8e3183000078/php
 * 
 * Given a non-empty array of integers, return the 
 * result of multiplying the values together in order.
 */

function grow($a) {
  $num = 1;
  
  for($i=0; $i<sizeof($a); $i++ ){
    $num *= $a[$i];
  }
  
  return $num;
  
  }

?>