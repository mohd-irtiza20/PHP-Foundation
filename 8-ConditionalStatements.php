<?php
##-------- CONDITIONAL STATEMENTS --------##

echo "<h2>Conditional Statements</h2>";

## If Statement
echo "<h4>If Statement</h4>";

$t = 10;

if ($t < 18) {
    echo "You are minor";
}
echo "<br>";                        // Added for better separation

## If Else
echo "<h4>If Else</h4>";

$t = 45;

if ($t < 18) {
    echo "You are minor";
} else {
    echo "You are adult";
}
echo "<br>";                        // Added for better separation

## If Else If
echo "<h4>If Else If</h4>";

$t = 45;

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";                        // Added for better separation

## Shorthand
echo "<h4>Shorthand</h4>";

# Short Hand If
$a = 23;

if ($a < 50)
    $b = "hello";

echo $b;
echo "<br>";

# Short Hand If...Else
$c = 10;

$d = $c < 18 ? "You are not eligible to vote" : "You can vote";

echo $d;
echo "<br>";

## Switch Statement
echo "<h4>Switch Statement</h4>";

$day = 3;

switch ($day) {
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid day";
}
?>