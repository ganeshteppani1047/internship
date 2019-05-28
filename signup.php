<?php
$servername = "localhost";
$username = "root";
$password = "root123";
$db="test";

$name=$_POST['name'];
$rollno=$_POST['rollno'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
if($pwd==$cpwd){
$sql = "insert into login values('$name','$rollno','$dob','$mobile','$email','$pwd','$cpwd')";
if (mysqli_query($conn, $sql)) {
    echo "Inserted successfully";
} else {
    echo "Error ";
}
}

mysqli_close($conn);
?>