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
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$contactNo=$_POST["contactNo"];
$DOB=$_POST["DOB"];
$hostel=$_POST["hostel"];
$bloodgp=$_POST["bloodgp"];
$gender=$_POST["gender"];



$sql = "INSERT INTO student_data (roll_no, first_name, last_name, contact_no, hostel, year, branch, dob, gender, blood_group)
VALUES('$rollNo','$firstName','$lastName','$contactNo','$hostel','3','BECOE','$DOB','$gender','$bloodgp')";

if (mysqli_query($conn,$sql)) {
    echo "New record created successfully";
}
else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$conn->close();

?>