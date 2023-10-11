<?php

$mysqli = mysqli_connect("svc-mycluster", "root", "nolaseyo.", "mysql");

$result = mysqli_query($mysqli, "SELECT 'A world full of ' AS _msg FROM DUAL");
$row = mysqli_fetch_assoc($result);
echo $row['_msg'];
?>
Hola mysqli
