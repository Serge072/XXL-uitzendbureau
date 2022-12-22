<?php
// Connect to the database
include("includes/conn.php");
session_start();
// Check for a POST request
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the message and sender from the form
  $message = mysqli_real_escape_string($conn, $_POST['message']);
  $sender = mysqli_real_escape_string($conn,$_SESSION['username']);

  // Insert the message into the database
  $sql = "INSERT INTO chat_messages (message, sender, timestamp) VALUES ('$message', '$sender', NOW())";
  mysqli_query($conn, $sql);
}

// Redirect the user to the login page
header('Location: chat.php');

?>