<?php
##-------- CLASS AND OBJECTS --------##
echo "<h2>CLASS AND OBJECTS</h2>";

# Define Class
echo "<h4>Define a Class</h4>";

class Car {

    //Properties
    public $name;
    public $color;

    //Methods
    function set_Name($name){
        $this->name =$name;
    }

    function get_Name($name){
        return $this->name;
    }
}


# Define Object
echo "<h4>Define Object</h4>";

class CarOne{

    //Properties
    public $name;
    public $color;

    //Methods
    function setName($name){
        $this->name=$name;             

    }

    function getName(){
        return $this->name;
    }
}
    #OBJECT
    $bmw = new CarOne();
    $audi= new CarOne();

    $bmw->setName('bmw');
    $audi->setName('audi');

    echo $bmw->getName();
    echo '<br>';
    echo $audi->getName();

?>