<?php

$mysqli = new mysqli("svc-mycluster", "root", "nolaseyo.", "mysql");

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("mycluster.ddbb.svc.cluster.local", "root", "nolaseyo.", "mysql", 3306);

echo $mysqli->host_info . "\n";
?>
Hola mysqli
