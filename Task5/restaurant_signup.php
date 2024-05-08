<?php
include "db_connection.php";
// Backend code for restaurant signup
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate and process data (insert into database, etc.)
    // Example: Insert data into MySQL database
    $sql = "INSERT INTO restaurants (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // Redirect to login page or show success message
    header("Location: restaurant_menu.html");
    exit;
}
?>
