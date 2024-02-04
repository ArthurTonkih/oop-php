<?php
include "users.php";
class Worker extends User {
    private $salary;
    private $age;

    // public function __construct ($salary, $age) {
    //     $this -> salary = $salary;
    //     $this -> age = $age;
    // }


    public function setSalary($salary) {
        $this -> salary = $salary;
    }
    public function getSalary() {
        return $this -> salary;
    }

    public function setAge($age) {
        $this -> age = $age;
    }
    public function getAge() {
        return $this -> age;
    }
}

?>