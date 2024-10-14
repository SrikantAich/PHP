<?php
class Employee
{
    private $employeeName;
    private $employeePosition;
    private $employeeSalary;

    public function __construct($name, $position, $salary)
    {
        // Validate salary is positive
        if ($salary > 0) {
            $this->employeeSalary = $salary;
        } else {
            echo "Invalid Salary<br>";
        }

        // Validate position is a non-empty string
        if (!empty($position)) {
            $this->employeePosition = $position;
        } else {
            echo "Invalid Position<br>";
        }

        // Set employee name
        $this->employeeName = $name;
    }
}

$employee1 = new Employee("Srikant", "", 1000);
print_r($employee1);
?>
