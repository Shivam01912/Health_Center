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

$feedback=$_POST["feedback"];
$sql = "INSERT INTO feedback(feedback) VALUES('$feedback')";

if (mysqli_query($conn,$sql)) {
    echo "Thank you for your feedback...!!";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>
