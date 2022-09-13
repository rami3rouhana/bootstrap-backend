<?php

include("connection.php");

// Vairiable
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Query
$sql = "INSERT INTO messages (name, email, phone, message) VALUES ('{$name}', '{$email}', '{$phone}', '{$message}')";

// Execution
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>