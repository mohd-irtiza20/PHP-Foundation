<?php

##-------- STRING --------## 
echo "<h2>String</h2>";

#-- Double Quotes
echo "<h4>Double Quotes</h4>";
echo "Hello";

#-- Single Quotes
echo "<h4>Single Quotes</h4>";
echo 'Hello';

##-------- STRING OPERATIONS --------## 

#-- 1. Length of String
echo "<h4>Length of String</h4>";
echo strlen("Hello World");
echo "<br>";

#-- 2. Word Count in String
echo "<h4>Word Count in String</h4>";
echo str_word_count("Hello I am learning PHP");
echo "<br>";

#-- 3. Search for Specific Text
echo "<h4>Search for Specific Text</h4>";
echo strpos("My name is Mohd Irtiza", "Irtiza"); // Returns the first character position
echo "<br>";

#-- 4. Convert String to Upper Case
echo "<h4>Convert String to Upper Case</h4>";
echo strtoupper('error');
echo "<br>";

#-- 5. Convert String to Lower Case
echo "<h4>Convert String to Lower Case</h4>";
echo strtolower('HELLO');
echo "<br>";

#-- 6. Replace Text
echo "<h4>Replace Text</h4>";
$originalText = 'Hello Rahul';
echo str_replace('Rahul', 'Irtiza', $originalText);
echo "<br>";

#-- 7. Reverse String
echo "<h4>Reverse String</h4>";
$scriptLang = 'Javascript';
echo strrev($scriptLang);
echo "<br>";

#-- 8. Remove Whitespaces from before and after in string
echo "<h4>Remove Whitespaces</h4>";
$whitespaceText = '       Javascript       ';
echo trim($whitespaceText);
echo "<br>";

// Removing specific characters
echo "<h4>Remove Specific Characters</h4>";
$greeting = "Hello";
echo trim($greeting, 'l');
echo "<br>";

#-- 9. Convert String into Array
echo "<h4>Convert String into Array</h4>";
$programmingLanguages = "java php javascript, C++";
$langArray = explode(" ", $programmingLanguages, 3);
print_r($langArray);
echo "<br>";

#-- 10. Concatenate Strings
echo "<h4>Concatenate Strings</h4>";
$firstWord = "Hello";
$secondWord = "World";

// Using Dot (.) operator
echo $firstWord . " " . $secondWord;
echo "<br>";

// Using Quotation
echo "$firstWord $secondWord";
echo "<br>";

#-- 11. Slicing Strings
echo "<h4>Slicing Strings</h4>";
$sliceString = "Java, Php, JavaScript, C++";
echo substr($sliceString, 5, 4); // Slicing from index 5, length 4
echo "<br>";

// Till End
echo substr($sliceString, 5); // From index 5 to the end
echo "<br>";

// From End
echo substr($sliceString, -3, 3); // Last 3 characters
echo "<br>";

echo substr($sliceString, -3); // Last 3 characters
echo "<br>";
?>