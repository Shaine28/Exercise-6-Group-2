<?php
  // Configuration
  $username = 'admin'; // default username
  $password = 'password'; // default password

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Check if username and password are correct
    if ($input_username == $username && $input_password == $password) {
      // Login successful, set HTTP header and redirect
      header("Location: Student Information.php");
      header("HTTP/1.1 302 Found");
      exit;
    } else {
      // Login failed, display error message
        echo "Invalid username or password";
    }
  }
?>