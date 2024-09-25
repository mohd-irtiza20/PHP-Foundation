<?php
echo '<pre>';
##------ CALLBACK FUNCTIONS ------##
echo "<h2>Callback Functions</h2>";

#Function to calculate the length of every string in an array
function call_back($item)
{
    return strlen($item);
}

$arr = ["Java", "PHP", "JavaScript"];
$length = array_map("call_back", $arr);

print_r($length);

#-- Same Using Anonymous Function

## Anonymous Function
echo "<h2>Anonymous Function</h2>"; #------------> Anonymous function is simply a function that does not have a name.

$arr2 = ["Java", "PHP", "JavaScript"];

$length2 = array_map(function ($item) {
    return strlen($item); }, $arr2);

print_r($length2);

#-- Running a callback
echo "<h4>Running a callback from user defined function</h4>";

//This function takes a number and doubles it
function double($num)
{
    return $num * 2;
}

//This function takes a number and squares it.
function sqr($num)
{
    return $num * $num;
}

// Callback Function

function process($num, $operation)
{
    return $operation($num);
}

echo process(5, "double");
echo '<br>';

echo process(4, "sqr");
echo '<br>';

?>