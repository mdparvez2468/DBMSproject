<?php
include "header.php";
include "database.php";
$sql = "SELECT email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      if ($row["email"]=='parvez15-2468@diu.edu.bd' && $row["password"]=='mdzevrap')
    echo 'success';
  }
} else {
  echo "0 results";
}
$conn->close();

include "footer.php";
?>