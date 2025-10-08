<?php
session_start();
include('db.php');

// dummy user data (you can insert this in DB manually for testing)
$test_username = "admin";
$test_password = "admin123";

// OR uncomment below to actually use DB (recommended)
// $username = $_POST['username'];
// $password = $_POST['password'];
// $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

if ($_POST['username'] == $test_username && $_POST['password'] == $test_password) {
  $_SESSION['username'] = $test_username;
  header("Location: dashboard.php");
  exit();
} else {
  echo "<script>alert('Invalid login!'); window.location='index.php';</script>";
}
?>
