<?php

##------ basename () ------##
echo "<h2>Basename Function</h2>"; #------> Returns the filename from a path

$target = "admin/home/myimage.jpg";

echo basename($target);
echo "<br>";
//OR
echo basename($target, "jpg");


##------ strtolower () ------##
echo "<h2>StrToLower Function</h2>"; #------> Convert all characters to lowercase

$target = "ADMIN/HOME/MYIMAGE.JPG";

echo strtolower($target);
echo "<br>";

##------ move_uploaded_file()  ------##
echo "<h2>Move_Uploaded_File Function</h2>"; #------> Moves uploaded file to a new destination

//--------------------
// SYNTAX: move_uploaded_file(file, dest)

#file: Specifies the filename of the uploaded file
#dest: Specifies the new location for the file

//--------------------

echo "This function moves an uploaded file to a new destination.";
echo "<br>";

##------ file_exists()  ------##
echo "<h2>File Exists Function</h2>"; #------> Check whether a file exists or not

if (file_exists('web3.txt')) {
    echo "YES";
} else {
    echo "NO";
}

##------ pathinfo()  ------##
echo "<h2>Path Info Function</h2>"; #------> Gives information about a file path:
print_r(pathinfo("web3.txt"));
echo '<br>';

/* Options */

# PATHINFO_DIRNAME - return only dirname
print_r(pathinfo('web3.txt', PATHINFO_DIRNAME));
echo '<br>';

# PATHINFO_BASENAME - return only basename
print_r(pathinfo('web.txt', PATHINFO_BASENAME));
echo '<br>';

# PATHINFO_EXTENSION - return only extension
print_r(pathinfo('web3.txt', PATHINFO_EXTENSION));
echo '<br>';

# PATHINFO_FILENAME - return only filename
print_r(pathinfo('web3.txt', PATHINFO_FILENAME));


##------ isset () ------##
echo "<h2>Isset Function</h2>"; #------> It check whether a variable is empty. Also check whether the variable is declared or not

$a = 10;

if (isset($a)) {
    echo "a is declared";
}

echo '<br>';

$b = NULL;

if (!isset($b)) {
    echo "b is not declared";
}


##------ empty () ------##
echo "<h2>Empty Function</h2>"; #------>


##------ count () ------##
echo "<h2>Count Function</h2>"; #------>

?>