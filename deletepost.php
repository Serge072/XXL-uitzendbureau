<?php
include_once "includes/conn.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];
  $sql = "DELETE FROM joboffers WHERE id = $id";

  if ($conn->query($sql) === TRUE) {
    echo "Info: vacture is verweiderd!";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}

header('Location: deletevacancy.php');
?>