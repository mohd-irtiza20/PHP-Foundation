<?php
##-------- CASTING --------##
echo "<h2>Casting</h2>";

## Integer Casting
echo "<h4>Integer Casting</h4>";

$a = 5.34;                     // Float
$b = "25 kilometers";          // String
$c = "hello";                  // String
$d = true;                     // Boolean
$e = NULL;                     // NULL

#- Cast float to integer
$cast_a = (int) $a;
echo "Cast of a: ";
var_dump($cast_a);
echo "<br>";

#- Cast string to integer
$cast_b = (int) $b;
echo "Cast of b: ";
var_dump($cast_b);
echo "<br>";

#- Cast string to integer
$cast_c = (int) $c;
echo "Cast of c: ";
var_dump($cast_c);
echo "<br>";

## String Casting
echo "<h4>String Casting</h4>";

$a = 5;                       // Integer
$b = 5.34;                   // Float
$d = true;                   // Boolean
$e = NULL;                   // NULL

#- Cast integer to string
$cast_a = (string) $a;
echo "Cast of a: ";
var_dump($cast_a);
echo "<br>";

#- Cast float to string
$cast_b = (string) $b;
echo "Cast of b: ";
var_dump($cast_b);
echo "<br>";

## Float Casting
echo "<h4>Float Casting</h4>";

$a = 5;                           // Integer
$b = "25 Line";                  // String
$c = "hello";                    // String
$d = true;                       // Boolean
$e = NULL;                       // NULL

#- Cast integer to float
$cast_a = (float) $a;
echo "Cast of a: ";
var_dump($cast_a);
echo "<br>";

#- Cast string to float
$cast_b = (float) $b;
echo "Cast of b: ";
var_dump($cast_b);
echo "<br>";

#- Cast string to float
$cast_c = (float) $c;
echo "Cast of c: ";
var_dump($cast_c);
echo "<br>";

## Array Casting
echo "<h4>Array Casting</h4>";

$a = 5;                         // Integer
$b = 5.34;                      // Float
$c = "hello";                   // String
$d = true;                      // Boolean
$e = NULL;                     // NULL

#- Cast integer to array
$cast_a = (array) $a;
echo "Cast of a: ";
var_dump($cast_a);
echo "<br>";

#- Cast float to array
$cast_b = (array) $b;
echo "Cast of b: ";
var_dump($cast_b);
echo "<br>";

#- Cast string to array
$cast_c = (array) $c;
echo "Cast of c: ";
var_dump($cast_c);
echo "<br>";
?>