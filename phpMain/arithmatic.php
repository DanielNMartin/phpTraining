<?php

/*
function calculus ($a, $b) {
$sum= $a + $b;
$min= $a - $b;
$mul= $a * $b;
$div= $a / $b;

return $sum;
return $min;
return $mul;
return $div;

return array ($sum, $min, $mul, $div);
}

echo calculus (6, 2);

*/
function calculus ($a, $b) {
$sum= $a + $b;
return $sum;
}

echo calculus (6, 2);

function calculus ($a, $b) {
$min= $a - $b;
return $min;
}

echo calculus (5, 2);

function calculus ($a, $b) {
$mul= $a * $b;
return $mul;
}

echo calculus (8, 2);

function calculus ($a, $b) {
$div= $a / $b;
return $div;
}

echo calculus (9, 3);
