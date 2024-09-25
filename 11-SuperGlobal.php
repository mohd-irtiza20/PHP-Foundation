<?php
##-------- SUPER GLOBAL VARIABLES --------##
echo "<h2>Super Global Variables</h2>";
echo "<p>Super global variables are always accessible, regardless of scope, and can be accessed from any function, class, or file.</p>";

## $GLOBALS
echo "<h4>\$GLOBALS</h4>";

$num = 10;

function mysum()
{
    # Accessing global variable using $GLOBALS
    echo $GLOBALS['num'];
}

mysum();
echo "<br>";

#global keyword
echo "<h4>Global Keyword</h4>";

$num2 = 100;

function mysum1()
{
    global $num2;           // Importing the global variable
    echo $num2;
}

mysum1();
echo "<br>";

## $_SERVER
echo "<h4>\$_SERVER</h4>";
echo "<p>Contains information about headers, paths, and script locations.</p>";
echo '<pre>';
print_r($_SERVER);
echo '</pre>';

## $_REQUEST
echo "<h4>\$_REQUEST</h4>";
echo "<p>Holds the contents of both $_GET, $_POST, and $_COOKIE.</p>";
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

## $_POST
echo "<h4>\$_POST</h4>";
echo "<p>Used to collect form data after submitting an HTML form with method='post'.</p>";
#Note: This will only display data if the form is submitted using POST method
echo '<pre>';
print_r($_POST);
echo '</pre>';

## $_GET
echo "<h4>\$_GET</h4>";
echo "<p>Used to collect form data after submitting an HTML form with method='get'.</p>";
#Note: This will only display data if the URL has query parameters
echo '<pre>';
print_r($_GET);
echo '</pre>';

## $_SESSION
echo "<h4>\$_SESSION</h4>";

#In file '18--Session.php'

## $_COOKIE
echo "<h4>\$_COOKIE</h4>";

#In file '17--Cookies.php'

## $_FILES
echo "<h4>\$_FILES</h4>";
echo "<p>Used to handle file uploads.</p>";
#Note: This will only display data if a file has been uploaded
echo '<pre>';
print_r($_FILES);
echo '</pre>';
?>