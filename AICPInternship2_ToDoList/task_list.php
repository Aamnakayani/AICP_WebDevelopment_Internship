<?php
include 'db_connect.php';

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Task Title: " . $row["title"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "No tasks found";
}
$conn->close();
?>
