<?php
##-------- OPERATORS --------##

echo "<h2>Operators</h2>";

## Arithmetic
echo "<h4>Arithmetic</h4>";

$num1 = 15;
$num2 = 10;

echo "Addition of $num1 and $num2 is: " . ($num1 + $num2);
echo "<br>";
echo "Subtraction of $num1 and $num2 is: " . ($num1 - $num2);
echo "<br>";
echo "Multiplication of $num1 and $num2 is: " . ($num1 * $num2);
echo "<br>";
echo "Division of $num1 and $num2 is: " . ($num1 / $num2);
echo "<br>";
echo "Modulus of $num1 and $num2 is: " . ($num1 % $num2);
echo "<br>";
echo "Exponentiation of $num1 and $num2 is: " . ($num1 ** $num2);
echo "<br>";

## Assignment
echo "<h4>Assignment</h4>";

$a = 30;
$b = 15;

echo "Initial value of a: " . ($a = $b);
echo "<br>";
echo "After adding 100: " . ($a += 100);
echo "<br>";
echo "After subtracting 10: " . ($a -= 10);
echo "<br>";
echo "After dividing by 5: " . ($a /= 5);
echo "<br>";
echo "After modulus by 4: " . ($a %= 4);
echo "<br>";
echo "After exponentiation by 7: " . ($a **= 7);
echo "<br>";

## Comparison
echo "<h4>Comparison</h4>";

$c = 65;
$d = 98;
$e = "65";

var_dump($c == $d);
echo "<br>";

var_dump($c == $e);
echo "<br>";

# Identical
$f = 90;
$g = 45;
$h = "90";

var_dump($f === $g);
echo "<br>";

var_dump($f === $h);
echo "<br>";

# Not equal
$i = 75;
$j = 52;
$k = "75";

var_dump($i != $j);
echo "<br>";

var_dump($i != $k);
echo "<br>";

var_dump($i <> $j);
echo "<br>";

# Not Identical
$k = 13;
$l = 37;

var_dump($k !== $l);
echo "<br>";

# Spaceship
$m = 86;
$n = 84;

var_dump($m <=> $n);
echo "<br>";

$o = 76;
$p = 98;

var_dump($o <=> $p);
echo "<br>";

$q = 38;
$r = 38;

var_dump($q <=> $r);
echo "<br>";

## Logical Operators
echo "<h4>Logical Operators</h4>";

# AND
$x = 100;
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world! (AND)";
}
echo "<br>";

# OR
$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world! (OR)";
}
echo "<br>";

# NOT
$x = 100;

if (!($x == 90)) {
    echo "Hello world! (NOT)";
}
echo "<br>";

## String Operators
echo "<h4>String Operators</h4>";

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?>