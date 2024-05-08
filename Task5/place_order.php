<?php
include "db_connection.php";
// Backend code for placing orders
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $dish = $_POST["dish"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO orders (dish, quantity) VALUES ('$dish', $quantity)";
    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    // Redirect back to customer order placement page or show success message
    header("Location: order_placement.html");
    exit;
}
?>
