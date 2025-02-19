<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$gender=$_POST['gender'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$address = $_POST['address']; 

$sql = "INSERT INTO students (first_name, last_name, gender,email, dob, phone, address) 
        VALUES ('$first_name', '$last_name', '$gender', '$email', '$dob', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='message'>New student registered successfully!</div>";
} else {
    echo "<div class='message'>Error: " . $sql . "<br>" . $conn->error . "</div>";
}
$conn->close();
?>
