<?php
include("includes/database.php");
session_start();
if (!isset($_SESSION['id'])) {
  header('location:index.php');
}

$id = $_SESSION['id'];

$query = mysqli_query($con, "SELECT * FROM user WHERE id = $id;");
if ($query) {
  $row = mysqli_fetch_array($query);
  $fullname = $row['fullname'];
  $username = $row['username'];
} else {
  echo $query;
  echo "<script>alert('Unable to authenticate!'); window.location='signin.php'</script>";
}
