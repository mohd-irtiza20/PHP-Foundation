<?php
##-------- NUMBER --------## 
echo "<h2>Number</h2>";

# Declare variables
$num1 = 5;
$num2 = 5.7;
$num3 = "454";

echo "num1: ";
var_dump($num1);                 // Integer
echo "<br>";

echo "num2: ";
var_dump($num2);                 // Float
echo "<br>";

echo "num3: ";
var_dump($num3);                // Number String
echo "<br>";

## Integer 
echo "<h4>Integer</h4>";
$num4 = 4;
$num5 = 2.5;

$result = $num4 * $num5;        // Multiplication of int and float
echo "Multiplication Result: " . $result;
echo "<br>";

echo "Result Type: ";
var_dump($result);              // The result is stored as float, because one of the operands is float
echo "<br>";

#-- Check if variables are integers
echo "<h6>Check Integer Status</h6>";

$num1 = 5;
$num2 = 5.7;
$num3 = "454";

echo "Is num1 an integer? ";
var_dump(is_int($num1));            // True
echo "<br>";

echo "Is num2 an integer? ";
var_dump(is_int($num2));            // False
echo "<br>";

echo "Is num3 an integer? ";
var_dump(is_int($num3));            // False
echo "<br>";

## Float
echo "<h4>Float</h4>";

#-- Check if variables are floats
echo "<h6>Check Float Status</h6>";

echo "Is num1 a float? ";
var_dump(is_float($num1));          // False
echo "<br>";

echo "Is num2 a float? ";
var_dump(is_float($num2));          // True
echo "<br>";

echo "Is num3 a float? ";
var_dump(is_float($num3));          // False
echo "<br>";

## Numerical String
echo "<h4>Numerical String</h4>";

#-- Check for numerical strings
echo "<h6>Check Numerical String Status</h6>";
$num4 = "Hello";

echo "Is num1 numeric? ";
var_dump(is_numeric($num1));            // True
echo "<br>";

echo "Is num2 numeric? ";
var_dump(is_numeric($num2));            // True
echo "<br>";

echo "Is num3 numeric? ";
var_dump(is_numeric($num3));            // True
echo "<br>";

echo "Is num4 numeric? ";
var_dump(is_numeric($num4));             // False
echo "<br>";
?>