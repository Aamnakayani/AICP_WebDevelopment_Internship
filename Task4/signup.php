<?php
session_start();
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $userType = $_POST['userType'];

    // Sanitize input
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);
    $userType = mysqli_real_escape_string($conn, $userType);

    // Check if username or email already exists
    $checkQuery = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        // Username or email already exists, show error message
        echo "Username or email already exists";
    } else {
        // Insert user data into database
        $insertQuery = "INSERT INTO users (username, password, email, userType) VALUES ('$username', '$password', '$email', '$userType')";
        if ($conn->query($insertQuery) === TRUE) {
            // Redirect to login page
            header("Location: admin_view.html");
            exit();
        } else {
            echo "Error: " . $insertQuery . "<br>" . $conn->error;
        }
    }
}
?>
