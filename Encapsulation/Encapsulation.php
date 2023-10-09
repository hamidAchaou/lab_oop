<?php
class Employee {
    private $name;
    private $age;
    private $salary;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAge($age) {
        if ($age >= 18) {
            $this->age = $age;
        } else {
            echo "Age must be 18 or above.";
        }
    }

    public function getAge() {
        return $this->age;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            echo "Salary cannot be negative.";
        }
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Usage
$employee = new Employee();
$employee->setName("Hamid Achaou");
$employee->setAge(25);
$employee->setSalary(5000);

echo "Name: " . $employee->getName();
echo "Age: " . $employee->getAge();
echo "Salary: " . $employee->getSalary();