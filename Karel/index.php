<?php
  $servername = "vazacdaniel.com";
  $username = "kqbweoga_website";
  $password = "a&W9?CAD^%(p";
  $dbname = "kqbweoga_Basic";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } else {
    echo "Connected";
  }
$conn->close();
    ?>
