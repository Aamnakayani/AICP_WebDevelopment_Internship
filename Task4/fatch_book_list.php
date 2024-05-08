<?php
include 'database.php';

// Fetch book list
$bookListQuery = "SELECT * FROM books";
$bookListResult = $conn->query($bookListQuery);

if ($bookListResult->num_rows > 0) {
    while($row = $bookListResult->fetch_assoc()) {
        echo "<li>" . $row["title"] . " by " . $row["author"] . "</li>";
    }
} else {
    echo "<li>No books found.</li>";
}
?>
