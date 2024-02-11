<?
namespace User;

class Employee {
    private $salary;

    public function __construct ($salary) {
        $this -> salary = $salary;
    }

    private function getSalary() {
        return $this -> salary;
    }
}
?>