<?php
include_once "includes/conn.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_SESSION["company"];
    $job = $_POST["job"];
    $category = $_POST["category"];
    $education = $_POST["education"];
    $duration = $_POST["duration"];
    $salary = $_POST["salary"];
    $description = $_POST["description"];
    $creatorID = $_SESSION['creatorID'];

    $sql = "INSERT INTO jobOffers (job, category, education, duration, salary, description, creatorID)
    VALUES ('$job', '$category', '$education', '$duration', '$salary', '$description', '$creatorID')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

header('Location: index.php');
exit;
?>