<?php
include 'db_connect.php';

echo '<body style="background-color: #BFD7ED;">'; 

echo '<div style="background-color: #60A3D9; padding: 1rem; font-size: 18px; max-width: 400px; margin-left: 550px; margin-top: 50px; border-radius: 10px;">';

echo '<header style="border-radius: 30px; max-width: 250px;max-height: 300px;margin-left: 100px; font-size: 18px;">';
echo "<h1>Delete List</h1>";
echo '</header>';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['delete_tasks'])) {
        foreach($_POST['delete_tasks'] as $task_id) {
            $delete_sql = "DELETE FROM tasks WHERE id=$task_id";
            if ($conn->query($delete_sql) === TRUE) {
                echo "Task with ID $task_id deleted successfully<br>";
            } else {
                echo "Error deleting task with ID $task_id: " . $conn->error . "<br>";
            }
        }
    }
}

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

$taskNumber = 1; 
if ($result->num_rows > 0) {
    echo '<form action="" method="post">';
    while($row = $result->fetch_assoc()) {
        echo '<div style="background-color:white; color: #0074B7; padding: 0.5rem; margin-bottom: 0.5rem; border-radius: 5px;">';
        echo "<input type='checkbox' name='delete_tasks[]' value='" . $row["id"] . "'>"; 
        echo "<strong>Task Number:</strong> " . $taskNumber++ . "<br>"; 
        echo "<strong>Task Title:</strong> " . $row["title"]. " - <strong>Description:</strong> " . $row["description"];
        echo '</div>';
    }
    echo '<input type="submit" value="Delete Selected Tasks">'; 
    echo '</form>';
} else {
    echo "No tasks found";
}

echo '</div>';

echo '</body>'; 

$conn->close();
?>
