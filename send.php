<?php

// Add header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

// Connect to database
include("connection.php");

// Recieving Raw JSON text
/*
{
    "name":"ramy",
    "email":"ramy@ramy.com",
    "phone":"71356540",
    "message":"Hello there, this is for testing the api"
}
*/
$_POST = json_decode(file_get_contents('php://input'), true);


// Vairiable
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Query
$sql = $conn->prepare("INSERT INTO messages (name, email, phone, message) VALUES (?, ?, ?, ?)");

$sql->bind_param("ssss", $name, $email, $phone, $message);

// Execution
if ($sql->execute() === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>