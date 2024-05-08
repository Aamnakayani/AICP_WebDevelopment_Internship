<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryName = $_POST['category_name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO business_categories (category_name, description) VALUES ('$categoryName', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Category added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeConnection();
}
?>
