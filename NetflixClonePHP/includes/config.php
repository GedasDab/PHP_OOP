<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Europe/Vilnius");

try {
    $con = new PDO("mysql:dbname=netflixclone;host=localhost", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Error reporting.
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>