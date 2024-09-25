<?php
##-------- MATH --------##
echo "<h2>Math</h2>";

## Value of Pi
echo "Value of Pi is: " . pi();
echo "<br>";

## Minimum value in the argument
echo "Min value in this argument is: " . min(12, -45, 497, -400);
echo "<br>";

## Maximum value in the argument
echo "Max value in this argument is: " . max(12, -45, 497, -400);
echo "<br>";

## Square root of 64
echo "Square root of 64 is: " . sqrt(64);
echo "<br>";

## Rounding 9.5
echo "Round of 9.5 is: " . round(9.5);
echo "<br>";

## Random number between 10 and 100
echo "Random Number is: " . rand(10, 100);
echo "<br>";

## Absolute value of -6.8
echo "Positive Value of -6.8 is: " . abs(-6.8);
echo "<br>";
?>