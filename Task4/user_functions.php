<?php
include 'database.php';

// User functions such as borrowing books and viewing book lists

// Function to borrow a book
function borrowBook($userID, $bookID) {
    global $conn;
    // Sanitize input
    $userID = mysqli_real_escape_string($conn, $userID);
    $bookID = mysqli_real_escape_string($conn, $bookID);
    // Insert borrowing record into database
    $sql = "INSERT INTO borrowing_history (userID, bookID, borrowDate) VALUES ('$userID', '$bookID', NOW())";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}

// Function to return a book
function returnBook($borrowID) {
    global $conn;
    // Sanitize input
    $borrowID = mysqli_real_escape_string($conn, $borrowID);
    // Update borrowing record in database
    $sql = "UPDATE borrowing_history SET returnDate=NOW() WHERE borrowID='$borrowID'";
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        return false;
    }
}
?>
