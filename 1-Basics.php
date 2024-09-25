<?php
##-------- SYNTAX --------##
echo "<h1>Hello World!</h1>";

##-------- CREATING VARIABLES --------##
$x = 5;
$y = "John";

##-------- OUTPUT VARIABLES --------##
echo "<h2>Output Variables</h2>";

# Echo
echo "<h4>Echo</h4>";
$txt = "Software Engineer";
echo "I am $txt";

# Print
print "<h4>Print</h4>";
$txt = "Software Engineer";
print "I am $txt";

# Print_r
echo "<h4>Print_r</h4>";
$txt = "Software Engineer";
print_r($txt);

##-------- COMMENTS --------##

// This is a single-line comment

# This is also a single-line comment

/* This is a multi-line comment */

##-------- VARIABLES AND TYPES --------##
echo "<h2>Variable Types</h2>";
var_dump(5);           // Integer
echo "<br>";
var_dump("Hello");     // String
echo "<br>";
var_dump(3.5);         // Float
echo "<br>";
var_dump(true);        // Boolean
echo "<br>";
var_dump([2, 4, 6]);   // Array
echo "<br>";

##-------- SAME VALUE TO MULTIPLE VARIABLES --------##
echo "<h2>Same Value to Multiple Variables</h2>";
$y = $x = $z = 10;
echo "x: $x<br>y: $y<br>z: $z";

##-------- SCOPE --------##

### Global Scope ###
echo "<h2>Global Scope</h2>";

$global_num = 13;

function myFun()
{
    // Attempt to access a global variable
    echo "<p>Variable global_num inside function: $global_num</p>";     // This will not work
}
myFun();

echo "<p>Variable global_num outside function: $global_num</p>";

### Using GLOBAL Keyword ###
echo "<h6>Using GLOBAL Keyword</h6>";

function newFun()
{
    global $global_num;
    echo "<p>Variable global_num inside function: $global_num</p>";
}
newFun();
echo "<p>Variable global_num outside function: $global_num</p>";

### Local Scope ###
echo "<h2>Local Scope</h2>";

function localFun()
{
    $local_num = 10;
    echo "<p>Variable local_num inside function: $local_num</p>";
}

localFun();
echo "<p>Variable local_num outside function: $local_num</p>";      // Error because $local_num is not defined outside the function

##-------- STATIC KEYWORD --------##

echo "<h2>Static Keyword</h2>";

### Without Static ###
echo "<h6>Without Static Keyword</h6>";
function Test()
{
    $static_num = 5;
    echo $static_num;
    $static_num++;
}

Test();
echo "<br>";
Test();
echo "<br>";
Test();

### With Static ###
echo "<h6>With Static Keyword</h6>";
function newTest()
{
    static $static_num = 5;
    echo $static_num;
    $static_num++;
}

newTest();
echo "<br>";
newTest();
echo "<br>";
newTest();

##-------- DIFFERENCE BETWEEN ECHO, PRINT AND PRINT_r --------##
echo "<h2>Difference Between Echo and Print</h2>";

### Echo ### -------------------------> It is a language constructor
echo "<h4>Echo</h4>";
echo "This is a test." . "<br>";
echo "Hello", " ", "world!";            //This works because ECHO support multiple parameters

// $result = echo "Hello, world!";      ERROR: because ECHO does not return a value


### Print ### -------------------------> It is a language constructor
echo "<h4>Print</h4>";
print "This is a test." . "<br>";

// print "Hello", " ", "world!";       ERROR: because PRINT does not support multiple parameters

$result = print "Hello, world!";       // This works because PRINT returns 1


### Print_r ### -------------------------> It is a regular function. It Prints human-readable information about arrays or objects.
echo "<h4>Print_r</h4>";
$arr = array("name" => "John", "age" => 30);
print_r($arr);
?>