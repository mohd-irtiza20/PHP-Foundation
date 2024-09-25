<?php
##------INCLUDE and REQUIRE ------##
echo "<h2> Include and Require Statements</h2>";
echo "<p> They both insert the content of one PHP file into another PHP file (before the server executes it) </p>";

##Require
echo "<h4> Require</h4>";
echo "<p> If PHP cannot find the file, will produce a FATAL ERROR and the script will stop</p>";

require 'ExampleOfInclude.php';

#NOTE: Use require when the file is required by the application.

##Include
echo "<h4> Include</h4>";
echo "<p> If PHP cannot find the file, it will only produce a WARNING ! and the script will continue to execute</p>";

// include 'Eg-Include.php';

#NOTE: Use include when the file is not required and application should continue when file is not found.

?>