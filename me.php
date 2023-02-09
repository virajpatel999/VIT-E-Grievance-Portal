<?php
include("includes/database.php");
include("session.php"); ?>
<!DOCTYPE html>


<html>
<head>
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="icon" href="../images/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="./css/scrollbar.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/home.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    .complaint_form {
      border-radius: 10px;
      padding: 20px 50px;
      display: inline-block;
      width: 100%;
    }
    .card{
      display: inline-block;
      margin: 50px;
    }
    body {
      background-color: #ffd196;
    }
  </style>
</head>

<body>
  <div class="button-types">
    <button class="vmc" style="text-decoration: none; background-color: #e0a90f;padding: 10px 40px;"><a href="index.php">VIT</a></button>
    <?php if ($_SESSION['role'] == 'admin') {
      echo '<button class="unresolved"><a href="home.php">Unresolved</a></button>';
    } else {
      echo '<button class="unresolved"><a href="home.php">Home</a></button>';
    }
    if ($_SESSION['role'] == 'admin') {
      echo '<button class="resolved"><a href="home.php?q=resolved">Resolved</a></button>';
    } else {
      echo '<button class="resolved"><a href="post_complaint.php?q=resolved">Post Complaint</a></button>';
    }
    ?>
    <button class="me" style="text-decoration: none; background-color: #17b4df;padding: 10px 40px;"><a href="me.php">Dashboard</a></button>
    <button class="signout" style="text-decoration: none; background-color: #e6807d;padding: 10px 40px;"><a href="signout.php">Sign Out</a></button>
  </div>
  <h1 style="text-align: center; color: gray;">User Dashboard</h1>
  <div class="complaints_container">
  <form class="complaint_form" align="center">
    <?php

    $result = mysqli_query($con, "SELECT * FROM user WHERE id = '$_SESSION[id]'");
    $admin = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);

    if ($count == 0) {
    } else if ($count > 0) {
      $fullname = $admin['fullname'];
      $username = $admin['username'];
      // $block = $admin['block'];
    }

    $query = mysqli_query($con, "SELECT * from complaint join user on complaint.user_id = user.id WHERE (complaint.user_id = '$_SESSION[id]') order by complaint.id DESC");
    if (mysqli_num_rows($query) == 0) {
    }
    while ($row = mySQLi_fetch_array($query)) {
      $id = $row['id'];
      $name = $row['fullname'];
      $reg = $row['reg'];
      $gender = $row['gender'];
      $type = $row['type'];
      $body = $row['body'];
      $action = $row['action'];
      $resolved = $row['resolved'];
    ?>

      
        <!-- <div class="side-by-side">
          <p class="name">Name: <?php echo $name ?></p>
          <p class="reg">Reg No: <?php echo $reg ?></p>
        </div>
        <div class="side-by-side">
          <p class="gender">Gender: <?php echo $gender ?></p>
          <p class="type">Type of Complaint: <?php echo $type ?></p>
        </div>
        <p class="body">Complaint Description: <?php echo $body ?></p>
        <p>Action: <?php echo $action ?></p>
        <p>Complaint status: <?php if ($resolved == 1) echo "Resolved";
                              else echo "Unresolved" ?></p>
        <hr> -->
        <div class="card border-<?php if($resolved==1)echo "success";else echo "danger" ?> mb-3" style="width:500px;height:200px;">
          <div class="card-header text-<?php if($resolved==1)echo "success";else echo "danger" ?>"><?php echo "Complaint - ".$type ?></div>
          <div class="card-body text-<?php if($resolved==1)echo "success";else echo "danger" ?>">
            <h5 class="card-title"><?php echo $body ?></h5>
            <p class="card-text">Action: <?php echo $action ?></p>
            <p class="card-text">Complaint status: <?php if ($resolved == 1) echo "Resolved";
                              else echo "Unresolved" ?></p>
          </div>
        </div>
    <?php
    }
    ?>
    </form>
  </div>
</body>