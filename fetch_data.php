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

// Retrieve data from the database
$sql = "SELECT * FROM registrations";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Data from Database</h3>
        <table>
            <tr>
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Gender</th>
                <th>Occupation</th>
                <th>ID Type</th>
                <th>ID Number</th>
                <th>Issue Authority</th>
                <th>Issue Date</th>
                <th>Issue State</th>
                <th>Expiry Date</th>
            </tr>
            <?php
            // Display data in table rows
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["dob"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["mobile"] . "</td>";
                    echo "<td>" . $row["gender"] . "</td>";
                    echo "<td>" . $row["occupation"] . "</td>";
                    echo "<td>" . $row["ID_type"] . "</td>";
                    echo "<td>" . $row["ID_Number"] . "</td>";
                    echo "<td>" . $row["issue_auth"] . "</td>";
                    echo "<td>" . $row["issue_date"] . "</td>";
                    echo "<td>" . $row["issue_state"] . "</td>";
                    echo "<td>" . $row["expiry_date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No data found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
