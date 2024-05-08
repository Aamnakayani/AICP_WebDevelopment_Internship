<?php
include "db_connection.php";

// Backend code for adding dishes
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $dish_name = $_POST["dish_name"];
    $price = $_POST["price"];

    $sql = "INSERT INTO dishes1 (dish_name, price) VALUES ('$dish_name', $price)";
    if ($conn->query($sql) === TRUE) {
        echo "New dish added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // Redirect back to restaurant menu page or show success message
    header("Location: restaurant_menu.html");
    exit;
}
?>
