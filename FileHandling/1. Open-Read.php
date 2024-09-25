<?php
##-------- FILE HANDLING --------##
echo "<h2>File Handling</h2>";

/* READ MODE 'r' */

## READ File - readfile()
echo "<h4>Read File ()</h4>";

echo readfile('web1.txt');
echo "<br>";

## 1. Open File - fopen()          #----> Used to open a file
echo '<h4>Open File</h4>';
// Better method of opening file than readfile()
// SYNTAX: fopen('filelocation, mode of file')

$myfile = fopen('web2.txt', 'r');

echo "File Opened Successfully";

## 2. Read File - fread()           #----> Used to read an open file
echo "<h4>Read File</h4>";
// SYNTAX: fread('variable in which file is stored',filesize('filelocation'))

$content = fread($myfile, filesize("web2.txt"));
echo $content;

#-Read Single Line - fgets()        #----> Used to read single line from a file
echo "<h6>Read Single Line</h6>";
$myfile = fopen('web2.txt', 'r');
echo fgets($myfile);

#-Read Single Character - fgetc()   #----> Used to read single character from a file
echo "<h6>Read Single Char</h6>";
$myfile = fopen('web2.txt', 'r');
echo fgetc($myfile);

//After a call the pointer moves to the next character.
echo fgetc($myfile);

## 3. Close File - fclose()         #----> Used to close open file
echo "<h4>Close File</h4>";
$myfile = fopen('web2.txt', 'r');
echo fclose($myfile);
echo "File closed";


## 4. Check End-Of-File - feof()     #----> It checks if the end of file has reached. It is useful for looping data of unknown length
echo "<h4>Check End-Of-File</h4>";
$myfile = fopen("web3.txt", "r");

while (!feof($myfile)) {
  echo fgetc($myfile);
}

?>