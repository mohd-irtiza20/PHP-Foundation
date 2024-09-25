<?php
##-------- FUNCTIONS --------##
echo "<h2>Functions</h2>";

## Function Call
echo "<h6>Functions Call</h6>";
function greet()
{
    echo "Hello" . "<br>";
}

greet();

## Function with Argument
echo "<h6>Function with Argument</h6>";
function myName($name)
{
    echo "Hello $name" . "<br>";
}

myName("Irtiza");
myName("Rahul");

## Function with Return
echo "<h6>Function with Return</h6>";
function my_Name($name)
{
    return "Hello $name";
}

$name = my_Name("Muntazir") . "<br>";
echo $name;

## Function with Multiple Arguments
echo "<h6>Function with Multiple Arguments</h6>";
function myFamily($name, $year)
{
    echo "$name was born in $year" . "<br>";
}

myFamily("Irtiza", 2002);
myFamily("Zubair", 2006);

## Functions Returning Values
echo "<h6>Functions Returning Values</h6>";
echo "<br>";

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo sum(4, 6);
echo "<br>";

# OR 
$result = sum(5, 7);
echo $result;

## Unset Function
echo "<h6>Unset Function</h6>";
$num3 = 45;
unset($num3);

var_dump($num3);                    // This will show NULL since $num3 has been unset
echo "<br>";                        // Added for better separation

## Passing Arguments by Reference
echo "<h6>Passing Arguments by Reference</h6>";
function increment(&$value)
{
    $value++;
}

$num = 10;
increment($num);
echo "Incremented Value: $num";     // This will output 11
?>