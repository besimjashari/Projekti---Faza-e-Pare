<?php
class ContactForm {
    private $name;
    private $surname;
    private $email;
    private $message;

    function __construct($name,$surname, $email, $message) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->message = $message;
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
    }
    public function getSurname() {
        return $this->surname;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        $this->message = $message;
    }
}
?>
