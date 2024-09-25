<?php
##------ EXCEPTION ------##
echo "<h2>Exceptions</h2>";

echo "<p>Exceptions are a way to handle errors in PHP. Instead of letting our program crash when something goes wrong, we can throw an exception which can then be caught & handled gracefully.</p>";

echo "<p>Throwing an Exception: When an error occurs, we can throw an exception to signal that something went wrong<p>";

function divide($divident, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division By ZERO"); // Throwing an exception
    }

    return $divident / $divisor;
}

#-- echo divide(8,0); // Throwing an exception
echo divide(4, 2);
echo '<br>';

## Try-Catch 
echo "<h4>Try-Catch Statement</h4>";

echo "To handle exceptions & avoid fatal errors, we can use a <strong>try-catch statement</strong>. Which allows us to catch the exception & run specific code when it occurs.";
echo '<br>' . '<br>';

function divideOne($divident, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Dividion By ZERO");
    }

    if ($divisor == 3) {
        throw new Exception("This is reserved number");
    }

    return $divident / $divisor;
}
#--TRY 
try {
    echo divideOne(4, 0); // Trying to divide
    # echo divideOne(4,3)
}

#--CATCH 
catch (Exception $e) {  #----> Here 'Exception' is the class and '$e' is the variable

    echo "Unable To Divide"; // Handling the exception
    echo '<br>';
}

## Try-Catch-Finally 
echo "<h4>Try-Catch-Finally Statement</h4>";

echo "The try-catch-finally statement can be used to catch exceptions. Code in the finally block will always run regardless of whether an exception was caught. ";
echo '<br>' . '<br>';

function divideTwo($divident, $divisor)
{
    if ($divident == 0) {
        throw new exception("Division By ZERO");
    }

    return $divident / $divisor;
}
#--TRY ------> Code that might fail.
try {
    #echo (divideTwo(8,0)); //Will throw ERROR
    echo (divideTwo(8, 9));
}
#-CATCH ------> Code to handle the error if TRY failed.
catch (exception $e) {
    echo "Unable to divide";
}
#-FINALLY ------> Code that always runs after trying, whether or not there was an error.
finally {
    echo "<br>" . "Process Complete";
}

#--If Finally Is Present The Catch Block Is Optional.
echo "<h6> Catch Block Is Optional</h6>";
function divideThree($divident, $divisor)
{
    if ($divisor == 0) {
        throw new exception("Division By ZERO");
    }

    return $divident / $divisor;
}

try {
    echo (divideThree(4, 8));
} finally {
    echo "<br>" . "The Process Is Complete";
}

## Exception Object ----> We can get Exception Object using "print_r($e)"
    echo "<h4>Exception Object</h4>";
    echo "It contains information about the error or unexpected behaviour that the function encountered.". "<br>";

    function divideFour($divident, $divisor){
        if($divisor ==0){
            throw new exception ("Divide By ZERO",1); #- "Division by zero" is the exception message. "1" is a label (called an exception code) for the error.
        }
        return $divident/$divisor;
    }

    try{
        echo (divideFour(5,0));
    }

    catch(exception $e){

        // FullObject
        echo "<pre>";
        print_r($e);
        echo "<br>";
        echo "</pre>";
        // 1. Message
        echo $e->getMessage();
        echo "<br>";

        //2. Code
        echo $e->getCode();

        //....
    }

    


?>