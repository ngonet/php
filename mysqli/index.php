<?php 
      echo "<pre>";
      print_r(get_loaded_extensions());
      echo "<pre/>";
?>
<?php
$servername = "mycluster";
$username = "root";
$password = "nolaseyo.";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
Hola mysqli
