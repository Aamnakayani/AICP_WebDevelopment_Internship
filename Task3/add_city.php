<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cityName = $_POST['city_name'];
    $state = $_POST['state'];
    $country = $_POST['country'];

    $sql = "INSERT INTO cities (city_name, state, country) VALUES ('$cityName', '$state', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo "City added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    closeConnection();
}
?>
