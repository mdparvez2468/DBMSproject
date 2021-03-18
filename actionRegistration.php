
<?php
include "database.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

$sql = "INSERT INTO users (id, name, email, password)
VALUES ('$id', '$fname', '$email','$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();

?>


