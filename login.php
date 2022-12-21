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

<form action="login.php" method="post">
  <label for="username">Username:</label><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
  <button type="submit"><a href="register.php">Register</a></button>
</form> 


<?php
  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the submitted username and password
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $permission = $conn->real_escape_string($_POST['permissions']);

    // Query the database to see if the username and password are correct
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    // If the query returns a row, the login was successful
    if ($result->num_rows == 1) {
      // Set the session variables
      $_SESSION['username'] = $username;
      $_SESSION['logged_in'] = true;
      $_SESSION['permission'] = $permission;

      // Redirect to the dashboard
      header('Location: index.php');
      exit;
    } else {
      // The login was unsuccessful
      echo '<p>Incorrect username or password</p>';
    }
  }
?>

