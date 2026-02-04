<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $fullname = trim($_POST['fullname']);

    // Clean input
    $username = strtolower($username);
    $fullname = ucwords($fullname);

    // Validation
    if (strlen($username) < 5) {
        die("Username must be at least 5 characters");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters");
    }

    echo "Registration Successful<br>";
    print "Welcome $fullname";
}
?>