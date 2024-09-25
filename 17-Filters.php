<?php
##------ FILTERS ------##
echo "<h2>Filters</h2>";  #----> filter_var() 

#Filters in php are used to:

//Validate Data = Checks if data is in proper form.
//Sanitizing Data = Removes all illegal characters from the data.

## Filter Extension
echo "<h4>Filter Extension</h4>";


## Sanitize String 
echo "<h4>Sanitize String </h4>";
echo "<h6>Removes special characters from string</h6>";

$str = "15 is > than 10 & 10 is < 20 " . "...." . "View source page to see output";

$newStr = filter_var($str, FILTER_SANITIZE_SPECIAL_CHARS);
echo $newStr;  // View Scouce Page To See Changes
echo "<br>";

echo "....";

## Validate Integer
echo "<h4>Validate Integer</h4>";

echo "<h6>Validate an Integer</h6>";

$int = 100;  #----------> It show 0 an Invalid Integer

if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo ("$int is a valid integer");
} else {
    echo "Invalid integer";
}

#-- Sanitize Integer
echo "<h6>Sanitize Integer</h6>";

$int = "I got 80k salary";

$newInt = (filter_var($int, FILTER_SANITIZE_NUMBER_INT));
echo $newInt;


## Validate IP Address
echo "<h4>Validate IP Address</h4>";
echo "<h6>Validates value as IP address</h6>";

$ip = "127.0.0.1";

if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo ("$ip <strong> is a valid IP address </strong>");
} else {
    echo "Invalid IP address";
}

## Sanitize and Validate an Email Address
echo "<h4>Sanitize and Validate an Email Address</h4>";

$email = "guest>@>gmail.com";
echo $email;
echo "<br>";

# Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

#--Validate
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("$email <strong>is a valid Email address</strong>");
} else {
    echo "Invalid Email address";
}


## Sanitize and Validate a URL
echo "<h4>Sanitize and Validate a URL</h4>";

$url = "https://www.google.com";

# Remove all illegal characters from url
$url = filter_var($url, FILTER_SANITIZE_URL);

#--Validate
if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo ("$url <strong>is a valid URL</strong>");
} else {
    echo ("$url is not a valid URL");
}

?>