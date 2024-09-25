<?php
##------ COOKIES ------##
echo "<h2>Cookies</h2>";

$cookie_name = "user";
$cookie_value = "Irtiza";

setcookie($cookie_name, $cookie_value, time() + 1000, "/", );
print_r($_COOKIE);

echo "<br>";
# Check if Cookies are Enabled
if (count($_COOKIE) > 0) {
    echo "Cookie are enabled";
} else {
    echo "Cookie are disabled";
}
?>