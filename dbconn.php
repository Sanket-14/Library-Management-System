<?php
session_start();
$dbservername = "sql204.infinityfree.com";
$dbusername = "if0_34735189";
$dbpassword = "7gQ0W7ENNePynkl";
$dbname = "if0_34735189_lms";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$dbname);
// Check connection
if (!$conn) {
    echo "Connected unsuccessfully";
    die("Connection failed: " . mysqli_connect_error());
}
?>