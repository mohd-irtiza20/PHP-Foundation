<?php
##-------- FILE HANDLING --------##
echo "<h2>File Handling</h2>";

/* WRITE MODE 'w' */

## CREATE File - fopen()
echo "<h4>Create File</h4>";

$myfile = fopen('web3.txt', 'w');
//If file "web3.txt" does not exist it will create it.
echo $myfile;


## WRITE to File - fwrite()
echo "<h4>Write to File</h4>";

$myfile = fopen('web3.txt', 'w');

if ($myfile) {
    echo "Text is created in 'web3.txt'";

    $txt = "Hello\n";
    fwrite($myfile, $txt);

    $txt = "Irtiza\n";
    fwrite($myfile, $txt);

    fclose($myfile); #----> It's a good programming practice to close all files after you have finished with them.
}


#Append Text  #----> add (something) to the end of a document.
echo "<h4>Append Text</h4>";
if ($myfile) {
    echo "Text appended in 'web3.txt'";
    $myfile = fopen('web3.txt', 'a');

    $txt = "How are you\n";
    fwrite($myfile, $txt);

    $txt = 'What are you doing';
    fwrite($myfile, $txt);
}
?>