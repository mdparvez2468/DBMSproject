
<?php
include "database.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row["email"]==$email && $row["password"]==$password)
            echo 'success';
    }
} else {
    echo "0 results";
}
$conn->close();

?>


