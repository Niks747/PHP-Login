
<?php

session_start();
error_reporting(0);

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";

$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Values to update
$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];



$sql = "UPDATE user SET username=?, password=?, email=?, phone=? WHERE 1";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssss', $name, $password, $email, $phone);

if ($stmt -> execute()) {
    echo "Record updated successfully.";
      
    // header('Location: index.php');
    
    
} else {
    echo "Error updating record: " . $stmt->error;
}




$stmt->close();
$conn->close();

?>

