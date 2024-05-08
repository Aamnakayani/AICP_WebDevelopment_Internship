<?php
include 'database.php';

// Admin functions such as adding, editing, and deleting users and books
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addBookBtn'])) {
    $title = $_POST['title'];
    $pages = $_POST['pages'];
    $publisher = $_POST['publisher'];
    $author = $_POST['author'];
    $edition = $_POST['edition'];

    // Insert book data into database
    $insertQuery = "INSERT INTO books (title, pages, publisher, author, edition) VALUES ('$title', '$pages', '$publisher', '$author', '$edition')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "<script>alert('Book added successfully!');</script>";
    } else {
        echo "<script>alert('Error adding book: " . $conn->error . "');</script>";
    }
}
// Function to add a new user
function addUser($username, $password, $email, $userType) {
    global $conn;
    // Sanitize input
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $email = mysqli_real_escape_string($conn, $email);
    $userType = mysqli_real_escape_string($conn, $userType);
    // Insert user data into database
    $sql = "INSERT INTO users (username, password, email, userType) VALUES ('$username', '$password', '$email', '$userType')";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to remove a user
function removeUser($userID) {
    global $conn;
    // Sanitize input
    $userID = mysqli_real_escape_string($conn, $userID);
    // Delete user from database
    $sql = "DELETE FROM users WHERE userID='$userID'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>
