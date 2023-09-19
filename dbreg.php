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
  die("Connection failed: ". $conn->connect_error);
}

$name =  $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

// Check if required fields are not empty
if (!empty($name) && !empty($email) && !empty($password)) {
    // Insert query
    $sql = "INSERT INTO user (username, email, password, phone) VALUES ('$name', '$email', '$password', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.";
    } else  {
        echo "Error inserting record: " . $conn->error;
    }
}

$conn->close();
?>

