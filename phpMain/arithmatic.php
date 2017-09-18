<?php
/*
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

echo "Sum of 6 + 2 = " . addition(6, 2) ."\n";
echo "Subtraction of 5 - 2 = " . subtraction(5, 2) ."\n";
echo "Multiplication of 8 * 2 = " . multiplication(8, 2) ."\n";
echo "Division of 9 / 3 = " . division(9, 3) ."\n";

*/

class Calculator {

  public function add($x, $y)
  {
    return $x + $y;
  }
}

$myCalculator = new Calculator();
echo $myCalculator->add(5, 5) . "\n";
echo $myCalculator->add(200, 500) . "\n";

public function subtract($x, $y)
{
  return $x - $y:
}
}

$myCalculator = new Calculator();
echo $myCalculator->subtract(15, 5) . "\n";

public function multiply($x, $y)
{
  return $x * $y:
}
}

$myCalculator = new Calculator();
echo $myCalculator->multiply(10, 5) . "\n";

public function divide($x, $y)
{
  return $x / $y:
}
}

$myCalculator = new Calculator();
echo $myCalculator->divide(50, 5) . "\n";

}
