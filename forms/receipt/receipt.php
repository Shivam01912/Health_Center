<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcenter";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$rollNo=$_POST["rollNo"];

$sql = "SELECT * FROM student_data WHERE roll_no='$rollNo'";
mysqli_query($conn,$sql);
$cnt=mysqli_affected_rows($conn);

if ($cnt > 0) {
	echo "you lose";
    }
else {
	header("location:../registration/registration.html");
}
$conn->close();

?>