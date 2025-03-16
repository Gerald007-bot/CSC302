<?php
$servername = "localhost"; // Change if using a remote database
$username = "root"; // Default MySQL username
$password = "mysql"; // Default MySQL password (empty by default)
$database = "myserver";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if ($conn == 1) {
    echo "Connection successful";
}else{
	echo "connection failed";
}



// Get Form Data
$server_id = $_POST['server_id'];
$username = $_POST['username'];
$password = $_POST['password'];

// Insert Data into MySQL
$sql = "INSERT INTO users (name, email) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close Connection
$conn->close();
?>
