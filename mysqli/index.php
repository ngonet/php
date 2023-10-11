<?php 

echo "<pre>";
print_r(get_loaded_extensions());
echo "<pre/>";

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

mysqli_debug("d:t:o,/tmp/client.trace");

?>
Hola mysqli
