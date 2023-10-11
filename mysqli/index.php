<?php

$mysqli = new mysqli("mycluster", "root", "nolaseyo.", "mysql");

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "nolaseyo.", "mysql", 3306);

echo $mysqli->host_info . "\n";
