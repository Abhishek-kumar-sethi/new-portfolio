<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $name = $_POST["name"];
    $email = $_POST["Email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // Print login data in proper format
    echo "name: " . htmlspecialchars($username) . "<br>";
    echo "subject: " . htmlspecialchars($password) . "<br>";
} else {
    // If form is not submitted, display error message
    echo "Form data not submitted.";
}
?>