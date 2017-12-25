<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vaishnavi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$eemail=$_POST['eemail'];
$phone=$_POST['phone'];

$sql = "INSERT INTO renew (uname, upass, eemail,phone) VALUES ('$uname', '$upass', '$eemail','$phone')";

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 