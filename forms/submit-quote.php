<?php
// submit-quote.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // You can access the form data here if needed, but we will not use it
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $phone = $_POST['phone'];
    // $message = $_POST['message'];

    // Display a success message
    echo "<h3>Form submitted successfully!</h3>";
    echo "<p>Thank you for your request. We will get back to you soon.</p>";
} else {
    // If the form was not submitted as POST, redirect back to the form
    header('Location: get-a-quote.html');
    exit;
}
?>
