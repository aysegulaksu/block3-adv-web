<?php 

#Exercise01
class Animal {
    public function makeSound() {
        echo "Generic animal sound";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow";
    }
}


$genericAnimal = new Animal();
$genericAnimal->makeSound();  //  bark

$cat = new Cat();
$cat->makeSound();  // Meow

#exercise02

class Vehicle {
    public function drive() {
        echo "Driving a vehicle";
    }
}

class Car extends Vehicle {
    public function drive() {
        echo "Repairing a car";
    }
}

# Exercise 3
class Shape {
    public function getArea() {
        echo "Calculating area of a shape";
    }
}

class Rectangle extends Shape {
    public function getArea() {
        echo "Calculating area of a rectangle";
    }
}

# Exercise 4
class Employee {
    public function work() {
        echo "Working as an employee";
    }

    public function getSalary() {
        echo "Getting salary";
    }
}

class HRManager extends Employee {
    public function work() {
        echo "Managing HR tasks";
    }

    public function addEmployee() {
        echo "Adding a new employee";
    }
}

# Exercise 5
class BankAccount {
    public function deposit() {
        echo "Depositing money";
    }

    public function withdraw() {
        echo "Withdrawing money";
    }
}

class SavingsAccount extends BankAccount {
    public function withdraw() {
        echo "Withdrawal blocked: the account balance isbelow one hundred";
    }
}

# Exercise 6
class AnimalMove {
    public function move() {
        echo "Moving";
    }
}

class Cheetah extends AnimalMove {
    public function move() {
        echo "Running";
    }
}

# Exercise 7
class Person {
    public function getFirstName() {
        echo "Getting first name";
    }

    public function getLastName() {
        echo "Getting last name";
    }
}

class EmployeeInfo extends Person {
    public function getLastName() {
        echo "Getting last name with job title";
    }

    public function getEmployeeId() {
        echo "Getting employee ID";
    }
}

# Exercise 8
class ShapePerimeterArea {
    public function getPerimeter() {
        echo "Calculating perimeter of a shape";
    }

    public function getArea() {
        echo "Calculating area of a shape";
    }
}

class Circle extends ShapePerimeterArea {
    public function getPerimeter() {
        echo "Calculating perimeter of a circle\n";
    }

    public function getArea() {
        echo "Calculating area of a circle";
    }
}

# Exercise 9
class VehicleHierarchy {
    public $make;
    public $model;
    public $year;
    public $fuelType;

    public function calculateFuelEfficiency() {
        echo "Calculating fuel efficiency";
    }

    public function calculateDistanceTraveled() {
        echo "Calculating distance traveled";
    }

    public function calculateMaxSpeed() {
        echo "Calculating maximum speed";
    }
}


# Exercise 10
class EmployeeHierarchy {
    public $name;
    public $address;
    public $salary;
    public $jobTitle;

    public function calculateBonuses() {
        echo "Calculating bonuses";
    }

    public function generatePerformanceReports() {
        echo "Generating performance reports";
    }

    public function manageProjects() {
        echo "Managing projects";
    }
}


?>
?>