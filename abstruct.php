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
abstract class Person {
    public $name;
    // the constructor function is public by default
    public function __construct($name) {
        $this->name = $name;
    }
    abstract public function sayHello() : string;
}
// Child classes
class Student extends Person {
    // inherited from parent class , needs to be defined but should follow the same parameters
    public function sayHello() : string {
        return "Hello! I'm a student and my name is $this->name!";
    }
}
class Employee extends Person {
    // inherited from parent class , needs to be defined but should follow the same parameters
    public function sayHello() : string {
        return "Hi! I'm an employee and my name is $this->name!";
    }
}
// create instances of the child classes
$std = new Student("Frank");
echo $std->sayHello();
echo "<br>";
$worker = new Employee("Mark");
echo $worker->sayHello();

?>










</body>
</html>