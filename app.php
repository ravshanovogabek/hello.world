<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // You can perform validation and database insertion here

    // For simplicity, just printing the values for demonstration purposes
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    // IMPORTANT: In a real application, NEVER print or display passwords!
}

?>
