<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];
$ID_type = $_POST['ID_type'];
$ID_Number = $_POST['ID_Number'];
$issue_auth = $_POST['issue_auth'];
$issue_date = $_POST['issue_date'];
$issue_state = $_POST['issue_state'];
$expiry_date = $_POST['expiry_date'];

// Insert data into database
$sql = "INSERT INTO registrations (name, dob, email, mobile, gender, occupation, ID_type, ID_Number, issue_auth, issue_date, issue_state, expiry_date)
        VALUES ('$name', '$dob', '$email', '$mobile', '$gender', '$occupation', '$ID_type', '$ID_Number', '$issue_auth', '$issue_date', '$issue_state', '$expiry_date')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
