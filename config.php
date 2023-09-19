 <?php
session_start();
error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginpage";


// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);

}

$name = $_POST['username'];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];

$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";


$result = $conn->query($sql);


if ($result->num_rows > 0)  {
  
    $_SESSION['logged_in'] = true;
    
    header('Location: userPage.php');
    exit;
} 


// // The user is logged in. Transfer to the user page.
$conn->close();
?>
 
