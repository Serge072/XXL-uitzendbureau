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
  <label for="first_name">Voornaam:</label><br>
  <input type="text" id="first_name" name="first_name" required><br>
  <label for="last_name">Achternaam:</label><br>
  <input type="text" id="last_name" name="last_name" required><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" required><br>
  <label for="phone">Telefoonnummer:</label><br>
  <input type="text" id="phone" name="phone" required><br>
  <label for="address">Adres:</label><br>
  <input type="text" id="address" name="address" required><br>
  <label for="company_name">Bedrijfsnaam:</label><br>
  <input type="text" id="company_name" name="company_name"><br>
  <label for="password">Wachtwoord:</label><br>
  <input type="password" id="password" name="password" required><br>
  <label for="type">Hoe wilt u registreren?</label>
  <select name="type" id="type">
    <option value="company">Bedrijf</option>
    <option value="customer">Klant</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form> 



<?php
  // Check if the form was submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      // Get the submitted form data
      $password = $conn->real_escape_string($_POST['password']);
      $type = $conn->real_escape_string($_POST['type']);
      $email = $conn->real_escape_string($_POST['email']);
      $phone = $conn->real_escape_string($_POST['phone']);
      $first_name = $conn->real_escape_string($_POST['first_name']);
      $last_name = $conn->real_escape_string($_POST['last_name']);
      $address = $conn->real_escape_string($_POST['address']);
      $company_name = $conn->real_escape_string($_POST['company_name']);
  
  // Insert the new user into the database
  $query = "INSERT INTO users (password, type, email, phone, first_name, last_name, address, company_name) VALUES ('$password', '$type', '$email', '$phone', '$first_name', '$last_name', '$address', '$company_name')";
  $result = $conn->query($query);

    if ($result) {
      // The registration was successful
      echo '<p>U bent succesvol geregistreed!</p>';
    } else {
      // The registration was unsuccessful
      echo '<p>Error: ' . $conn->error . '</p>';
    }
  }
?>


