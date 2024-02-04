<?php
class User {
    private $name;
    private $surname;
    private $password;
    private $login;

    // public function __construct ($name, $surname, $password, $login) {
    //     $this -> name = $name;
    //     $this -> surname = $surname;
    //     $this -> password = $password;
    //     $this -> login = $login;
    // }

    public function setName($name) {
        $this -> name = $name;
    }
    public function getName() {
        return $this -> name;
    }

    public function setSurname($surname) {
        $this -> surname = $surname;
    }
    public function getSurame() {
        return $this -> surname;
    }

    public function setPassword($password) {
        $this -> password = $password;
    }
    public function getPassword() {
        return $this -> password;
    }

    public function setLogin($login) {
        $this -> login = $login;
    }
    public function getLogin() {
        return $this -> login;
    }
}

?>