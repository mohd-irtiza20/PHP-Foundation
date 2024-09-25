<?php
##------ JSON ------##
echo "<h2>JSON</h2>";

echo "<p>JSON is a popular open standard file format for storing & exchanging data. JSON represents data as key-value pairs & supports various data types like strings, numbers, arrays & objects. It's commonly used in web applications to transmit data between a server & a client.</p>";

## Encode 
echo "<h4>Encode</h4>";  #-----> encode function is used to encode a value to JSON format

#--Encodeing an associative array
$age = array('Irtiza' => 23, 'Zubair' => 34, 'Muntazir' => 18);

echo json_encode($age);
echo '<br>';

#--Encodeing an indexed array
$cars = array("BMW", "Audi", "Volvo");

echo json_encode($cars);
echo '<br>';

## Decode 

echo "<h4>Decode</h4>"; #-----> decode function is used to decode a JSON object into a php object or an associative array

#-- Object
echo "<h6>In Object</h6>";
$marks = '{
 "Irtiza":"94",
 "Zubair":"97", 
 "Muntazir":"86"
 }';

var_dump(json_decode($marks));  #-----> Decode function returns an object by default.

#-- Array
echo "<h6>In Array</h6>";
$marks = '{
 "Irtiza":"94", 
 "Zubair":"97",
 "Muntazir":"86"
}';

var_dump(json_decode($marks, true)); #-----> Decode function has a second parameter & when set to true, JSON objects are decoded into associative arrays.

## Accessing Values
echo "<h4>Accessing the Decoded Values</h4>";

#-- Object
echo "<h6>In Object</h6>";

$marks = '{
    "Irtiza":"94",
    "Zubair":"97", 
    "Muntazir":"86"
    }';

$obj = json_decode($marks);
echo $obj->Irtiza; // Accessed value of 'Irtiza'

#-- Array 
echo "<h6>In Array</h6>";

$marks = '{
    "Irtiza":"94",
    "Zubair":"97", 
    "Muntazir":"86"
    }';

$arr = json_decode($marks, true);
echo $arr["Zubair"]; // Accessed value of 'Zubair'


## Looping using foreach()
echo "<h4>Looping Through the Values Using foreach()</h4>";


#-- Object
echo "<h6>In Object</h6>";

$marks = '{
    "Irtiza":"94",
    "Zubair":"97", 
    "Muntazir":"86"
    }';

$obj = json_decode($marks);

foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

#-- Array 
echo "<h6>In Array</h6>";

$marks = '{
    "Irtiza":"94",
    "Zubair":"97", 
    "Muntazir":"86"
    }';

$arr = json_decode($marks, true);

foreach ($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
?>