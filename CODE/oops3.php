<?php

class Student{

    private $studentName;
    private $studentAge;
    private $grade;

    public function __construct($name, $age, $grade){
        $this->studentName = $name;
        $this->studentAge = $age;
        $this->grade = $grade;
    }

    public function __destruct()
    {
        echo "The student details are: <br>";
        echo "Name: ".$this->studentName."<br>";
        echo "Age: ".$this->studentAge."<br>";
        echo "Grade: ".$this->grade."<br>";
    }


}
 $student1=new student("Srikant",23,"C");
?>