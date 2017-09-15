<?php

function addition($a, $b) {
  $sum = $a + $b;
  return $sum;
}

function subtraction($a, $b) {
  $min = $a - $b;
  return $min;
}

function multiplication($a, $b) {
  $mul = $a * $b;
  return $mul;
}

function division($a, $b) {
  $div = $a / $b;
  return $div;
}

echo addition (6, 2) ."\n";
echo subtraction (5, 2) ."\n";
echo multiplication (8, 2) ."\n";
echo division (9, 3) ."\n";
