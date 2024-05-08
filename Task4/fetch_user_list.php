<?php
include 'database.php';

// Fetch user list
$userListQuery = "SELECT * FROM users";
$userListResult = $conn->query($userListQuery);

if ($userListResult->num_rows > 0) {
    while($row = $userListResult->fetch_assoc()) {
        echo "<li>" . $row["username"] . " - " . $row["email"] . "</li>";
    }
} else {
    echo "<li>No users found.</li>";
}
?>
