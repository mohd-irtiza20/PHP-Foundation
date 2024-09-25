<?php
##-------- CONSTANTS --------##
echo "<h2>Constant</h2>";

// --------------------------------
// Syntax: define("name", "value")
// --------------------------------

## Constant using define
define("hello", "I am working on a project");
echo hello;
echo "<br>";

// Constant using const
const HELLO = "I am working on a project";
echo HELLO;
echo "<br>";

## Const vs Define
echo "<h6>Const vs Define()</h6>";
// Const  Cannot be used in a block scope like a function
#Example
function myfunc()
{
    // const GREET = "Irtiza";                   // --------- ERROR !
    define("GREET", "Irtiza");
    echo "<p>Hello, " . GREET . "</p>";
}

myfunc();

## Constant Array
echo "<h6>Constant Array</h6>";
define("cars", ["Toyota", "BMW", "Audi"]);
echo cars[2];                                   // Outputs: Audi
echo "<br>";

## Constants are Global
echo "<h6>Constants are Global</h6>";           // Can be accessed from anywhere in the script

const name = "I am a software engineer";

//define("name", "I am a software engineer");

function cons()
{
    echo name;                                  // Accessing the global constant
}

cons();
echo "<br>";

## Magic Constants
echo "<h2>Magic Constants</h2>";

echo "Directory: " . __DIR__;
echo "<br>";

echo "File: " . __FILE__;
echo "<br>";

echo "Line: " . __LINE__;
echo "<br>";

function main()
{
    echo "Hello";
    echo "<br>";
    echo "Function Name: " . __FUNCTION__;
}

main();
?>