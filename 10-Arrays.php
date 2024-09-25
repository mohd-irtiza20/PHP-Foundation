<?php

##-------- ARRAYS --------##
echo "<h2>Arrays</h2>";

##- Indexed Array
echo "<h4>Indexed Array</h4>";

$cars = ["Audi", "BMW", "Toyota", "Maruti"];
echo $cars[0] . "<br>";
echo $cars[3] . "<br>";

# Change Value
$cars[2] = "Tata";
var_dump($cars);
echo "<br>";

# Loop
echo "<h6>Looping through Indexed Array</h6>";
foreach ($cars as $item) {
    echo " " . $item . "<br>";
}

# Push Value
echo "<h6>Push Value</h6>";
$cars = ["Audi", "BMW", "Toyota", "Maruti"];

array_push($cars, "Mahindra");
var_dump($cars);
echo "<br><br>";

##- Associative Array: that stores data in key-value pairs
echo "<h4>Associative Array</h4>";

$cars = ["Tata" => "Nexon", "Maruti" => "Alto", "Mahindra" => "Scorpio"];
echo $cars["Maruti"];
echo "<br><br>";

# OR
$cars = array("Tata" => "Nexon", "Maruti" => "Alto", "Mahindra" => "Scorpio");
echo $cars["Tata"];
echo "<br><br>";

# Change Value
$cars["Tata"] = "Indigo";
var_dump($cars);
echo "<br><br>";

## CREATE Array
echo "<h3>Create Array</h3>";

#-using ()
$cars = array("Audi", "BMW", "Toyota");
var_dump($cars);
echo "<br><br>";

#-using[]
$cars = ["Audi", "BMW", "Toyota"];
var_dump($cars);
echo "<br>";

# Array Keys
echo "<h4>Array Keys</h4>";
$cars = [
    2 => "Honda",
    4 => "Nexon",
    6 => "Thar"
];

var_dump($cars);
echo "<br>";

echo ($cars[2]);
echo "<br><br>";

# Empty Array
echo "<h4>Empty Array</h4>";
$newCars = [];
$newCars[0] = 'Mustang';
$newCars[1] = 'Ford';
$newCars[2] = 'Volvo';

var_dump($newCars);
echo "<br><br>";

# Mixing Array Keys
echo "<h4>Mixing Array Keys</h4>";
$myArr = [];
$myArr[0] = 'Mango';
$myArr[1] = 'Apple';
$myArr['fruit'] = 'Watermelon';

var_dump($myArr[0]);
echo "<br>";
var_dump($myArr['fruit']);
echo "<br>";

# ACCESS Array
echo "<h4>Access Array</h4>";
$cars = ["Audi", "BMW", "Toyota"];
var_dump($cars[0]);
echo "<br>";
#OR
$cars = ["brand" => "Audi", "model" => "BMW", "year" => 1890];
var_dump($cars["year"]);
echo "<br>";

# Accessing function

// function myCars(){
//     echo "I came from function";
// }

// $cars = array("Audi", 1990, myCars);

// $cars[2]();

## Update Array
echo "<h3>Update Array</h3>";
$cars = ["Audi", "BMW", "Toyota"];
$cars[1] = "Ford";
var_dump($cars);
echo "<br>";

# Update Array Items in a Foreach Loop
$cars = ["Mustang", "Ford", "Thar"];
foreach ($cars as &$item) {
    $item = "WagonR";
}
unset($item);                   // Important to unset reference
var_dump($cars);
echo "<br>";

## ADD Item in Array
echo "<h5>Add Item in Array</h5>";
$fruits = ['apple', 'mango', 'cherry'];
$fruits[] = 'orange';
var_dump($fruits);
echo "<br>";

# For associative arrays
$cars = ['brand' => 'Ford', 'model' => 2019];
$cars['color'] = 'red';
var_dump($cars);
echo "<br>";

# Adding multiple items
$fruits = ['apple', 'mango', 'cherry'];
array_push($fruits, 'orange', 'banana', 'kiwi');
var_dump($fruits);
echo "<br>";

## REMOVE Item in Array
echo "<h3>Remove Item in Array</h3>";
$cars = ["Audi", "BMW", "Toyota", "Mustang", "WagonR", "Maruti"];
echo "<br>";

# Using splice()
array_splice($cars, 4, 2);
var_dump($cars);
echo "<br>";

# Using unset() - does not re-arrange the indexes, deletes item with index
$cars = ["Audi", "BMW", "Toyota", "Mustang", "WagonR", "Maruti"];
unset($cars[4], $cars[5]);
var_dump($cars);
echo "<br>";

//.using diff() ---------- returns a new array, without the deleted items
//Associative array.

// $cars = ["brand"=>"BMW","model"=>1990,"color"=>"red"];
// $new_Cars=array_diff($cars,"model",1990);

// var_dump($new_Cars);

# Remove Last Item
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);
echo "<br>";

# Remove First Item
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
echo "<br>";

## Sorting Array
echo "<h3>Sorting Array</h3>";

# Sort Array in Ascending Order
$cars = ["Toyota", "Mustang", "Audi", "Maruti", "BMW"];
sort($cars);
var_dump($cars);
echo "<br>";

$numbers = [85, 94, 24, 15, 73];
sort($numbers);
var_dump($numbers);
echo "<br>";

# According to Key - ksort()

// $details=array ("rohan"=> "16", "aman"=>"55", "danish"=>"44");

// asort($detalis);
// var_dump($details);

# According to Value - asort()

# Sort Array in Descending Order
$cars = ["Toyota", "Mustang", "Audi", "Maruti", "BMW"];
rsort($cars);
var_dump($cars);
echo "<br>";

$numbers = [85, 94, 24, 15, 73];
rsort($numbers);
var_dump($numbers);
echo "<br>";

## Multidimensional Arrays
echo "<h4>Multidimensional Arrays</h4>";
$cars = [
    ['Audi', 'BMW', 'Mustang'],
    ['Maruti', 'Santro'],
];

var_dump($cars[0][1]);
echo "<br>";
# OR
$cars = array(
    array('Audi', 'BMW', 'Mustang'),
    array('Maruti', 'Santro'),
);
var_dump($cars[1][1]);
echo "<br>";

## ARRAY FUNCTION

# array_map() -----------> The array_map() function sends each value of an array to a user-made function & returns an array with new values given by the user-made function.

echo "<h4>array_map() Function</h4>";

#-- Doubling Numbers
function map($n)
{
    return $n * 2;
}

echo "Original array [1,2,3]";
$arr = [1, 2, 3];
echo "<br>";

$num = array_map("map", $arr);
print_r($num);
echo "<br>";

echo "New array [2,4,6]";
echo "<br>";

?>