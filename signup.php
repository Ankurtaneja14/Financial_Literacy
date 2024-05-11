<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $privacy = isset($_POST['privacy']) ? 1 : 0; // Check if privacy policy is accepted

    // Check if username already exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'Username already exists. Please choose a different one.';
    } else {
        // Insert new user data into the database
        $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, mobile, username, password, privacy) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $firstname, $lastname, $email, $mobile, $username, $password_hash, $privacy);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt->execute();
        echo 'Account created successfully! You can now <a href="login.html">login</a>.';
    }

    $stmt->close();
    $conn->close();
}
?>
