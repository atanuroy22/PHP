<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php


class Person 
{
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Student is inherited from Person
class Student extends Person 
{
    public $name;
    public $age;
    public $course;
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }
    public function sayHello() {
        echo "Hello I am " . $this->name . " and I am " . $this->age . " years old. I study " . $this->course;
    }
}    

$std = new Student('Frank', 17, 'Biology');
$std1 = new person('asit', 15);

$std->sayHello();
$std1->sayHello();




?>







</body>
</html>