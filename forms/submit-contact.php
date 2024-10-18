<?php
// submit-contact.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Normally you would handle form data here
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    // For now, just return an "OK" response
    echo "OK";
} else {
    // If the form was not submitted as POST, redirect back to the form page
    header('Location: contact.html'); // Adjust the path as needed
    exit;
}
?>
