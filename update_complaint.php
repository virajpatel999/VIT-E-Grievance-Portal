<?php
include('includes/database.php');

$resolved;
$id = addslashes($_POST["id"]);
echo $id;
if (isset($_POST["resolved"])) {
  $resolved = 1;
} else {
  $resolved = 0;
}
echo $resolved;
$action = addslashes($_POST["action"]);
echo $action;
$update = mysqli_query($con, "UPDATE complaint SET resolved =  $resolved, action = '$action' WHERE id=$id");
echo $update;

if ($update) {
  echo "<script>alert('Update success!'); window.location='home.php'</script>";
  // header('location:home.php');
}
