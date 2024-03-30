<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
 <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .fetch-button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .fetch-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Form Submitted Successfully</h2>
    <form action="fetch_data.php" method="post">
        <button type="submit">Fetch Data</button>
    </form>
</body>
</html>

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
    // echo "New record created successfully"; // Commented out to prevent displaying this message
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close database connection
$conn->close();
?>
