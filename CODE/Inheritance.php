<?php
class Student {
    protected $studentName;
    protected $studentAge;

    public function __construct($name, $age) {
        $this->studentName = $name;
        $this->studentAge = $age;
    }

    public function __destruct() {
        echo "<div class='student-details'>";
        echo "<p>Name: " . $this->studentName . "</p>";
        echo "<p>Age: " . $this->studentAge . "</p>";
        echo "</div>";
    }
}

class StudentGrades extends Student {
    private $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age); // Call parent constructor
        $this->grade = $grade;
    }

    public function __destruct() {
        parent::__destruct(); // Call parent destructor
        echo "<div class='student-grade'>";
        echo "<p>Grade: " . $this->grade . "</p>";
        echo "</div>";
    }
}

// Example usage
$student = new StudentGrades("John Doe", 20, "A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .student-details, .student-grade {
            margin-bottom: 10px;
        }
        p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // The student details and grade will be displayed here
        ?>
    </div>
</body>
</html>