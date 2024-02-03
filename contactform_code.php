<?php
include_once 'contactform.php';
include_once 'ContactFormRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $surname = $_POST['surname'];
    $message = $_POST['msg'];

    if (empty($name) || empty($email)||empty($surname) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        
        $contactForm = new ContactForm($name,$surname, $email, $message);

        $contactFormRepository = new ContactFormRepository();

        $contactFormRepository->insertContactForm($contactForm);

        echo "Contact form data has been successfully submitted.";
        echo '<a href="kontakto.php">Kthehu Pas</a>';
        header('location: kontakto.php');
    }
}
?>