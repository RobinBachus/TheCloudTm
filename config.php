<?php
$env = parse_ini_file('.env');

// Basic connection settings
$databaseHost = $env["HOST"];
$databaseUsername = $env["USER"];
$databasePassword = $env["PASS"];
$databaseName = $env["DB"];

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>
