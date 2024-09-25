<?php
##-------- DATE AND TIME --------##
echo "<h2>Date and Time</h2>";

## Date() Function
echo "<h4>Date ( )</h4>";

echo "Today is: " . date("m/y/d");
echo "<br>";

echo "Today is: " . date("M-Y-D");
echo "<br>";

echo "Today is: " . date("y/m/d-l");  // ------> l represents day

# Using date() to automatically update the copyright year on website
echo "<h6>Automatically Update</h6>";

echo "@copy; 2020 -" . date("Y");

## Time
echo "<h4>Time</h4>";

echo "The Time in 12-hour format:" . date("h:i:s");
echo "<br>";

echo "The Time in 24-hour format: " . date("H:i:s"); // ------> i represents Minutes
echo "<br>";

echo "The Time in 24-hour format: " . date("h:i:s a"); // ------> a represents AM and PM
echo "<br>";

?>