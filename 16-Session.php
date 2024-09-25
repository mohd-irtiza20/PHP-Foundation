<?php
session_start(); #---> A session should always start before the html
?>

<?php
##------ SESSION ------##
echo "<h2>Session</h2>";
echo "<pre>";


#Setting Session Variables

$_SESSION['FavCar'] = 'Audi';
$_SESSION['FavColor'] = 'Black';
print_r($_SESSION);


#To remove all session variables
session_unset();

#To destroy the session
session_destroy();
?>