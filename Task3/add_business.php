<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $businessName = $_POST['business_name'];
    $categoryId = $_POST['category_id'];
    $cityId = $_POST['city_id'];
    $description = $_POST['description'];

    $sql = "INSERT INTO businesses (business_name, category_id, city_id, description) VALUES ('$businessName', '$categoryId', '$cityId', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Business added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeConnection();
}
?>
