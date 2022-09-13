<?php

include("connection.php");

$sql = "INSERT INTO messages (name, email, phone, message) VALUES ('John', 'john@example.com',71371723,'hekls ldsa dasjkn askd')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>