<?php
  //create database connection
    include("includes/databaselink.php");
  
  // Start the session
  session_start();

  // If the user is already logged in, redirect them to the dashboard
  if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
  }
?>


<form action="register.php" method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form> 


<?php
  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the submitted form data
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);

    // Insert the new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = $conn->query($query);

    if ($result) {
      // The registration was successful
      echo '<p>Registration successful!</p>';
    } else {
      // The registration was unsuccessful
      echo '<p>Error: ' . $conn->error . '</p>';
    }
  }
?>


