<?
class User {
    private $name;
    private $surname;

    private $birthday;

    public function __construct ($name, $surname, $birthday) {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> birthday = $birthday; 
    }

    private function getName() {
        return $this -> name;
    }

    private function getSurname() {
        return $this -> surname;
    }

    private function getBirthday() {
        return $this -> birthday;
    }

    private function calculateAge() {
        $birthdayData = strtotime($birthday);
        $age = date('Y-m-d') - date('Y-m-d', $birthdayData);
        return $this -> age;

        return $age;
    }
}

$user = new User('Ivan', 'Ivanov', '2008-01-18');

?>