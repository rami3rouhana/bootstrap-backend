<?php

include("connection.php");

$sql = "INSERT INTO message (name, email, phone, message)
VALUES ('John', 'john@example.com',71371723,'heklsldsadasjknaskd    ')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>