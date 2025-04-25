<?php

class Student {
    private $id;
    private $name;
    private $class;
    private $marks;

    public function __construct($id, $name, $class, $marks) {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->marks = $marks;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getClass() {
        return $this->class;
    }

    public function getMarks() {
        return $this->marks;
    }

    
    public function displayInfo() {
        echo "Student ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Class: " . $this->class . "<br>";
        echo "Marks: " . $this->marks . "<br><br>";
    }
}


$student1 = new Student(101, "hara", "10th", 89);
$student2 = new Student(102, "Reena", "9th", 95);


$student1->displayInfo();
$student2->displayInfo();
?>