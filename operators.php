<?php
// Arithmetic Operators
$a = 10;
$b = 5;


echo "Arithmetic Operators:";
echo "<br>$a + $b = " . ($a + $b) ; // Addition
echo "<br>$a - $b = " . ($a - $b); // Subtraction
echo "<br>$a * $b = " . ($a * $b); // Multiplication
echo "<br>$a / $b = " . ($a / $b); // Division
echo "<br>$a % $b = " . ($a % $b); // Modulus



// Comparison Operators
$x = 10;
$y = 20;

echo "<br>Comparison Operators:";
echo "<br>$x == $y : " . ($x == $y ? 'True' : 'False') ; // Equality
echo "<br>$x != $y : " . ($x != $y ? 'True' : 'False') ; // Inequality
echo "<br>$x > $y : " . ($x > $y ? 'True' : 'False'); // Greater than
echo "<br>$x < $y : " . ($x < $y ? 'True' : 'False') ; // Less than
echo "<br>$x >= $y : " . ($x >= $y ? 'True' : 'False'); // Greater than or equal to
echo "<br>$x <= $y : " . ($x <= $y ? 'True' : 'False') ; // Less than or equal to



// Logical Operators
$bool1 = true;
$bool2 = false;

echo "<br>Logical Operators:";
echo "<br>bool1 AND bool2 : " . (($bool1 && $bool2) ? 'True' : 'False') ; // AND
echo "<br>bool1 OR bool2 : " . (($bool1 || $bool2) ? 'True' : 'False') ; // OR
echo "<br>NOT bool1 : " . (!$bool1 ? 'True' : 'False') ; // NOT
?>
