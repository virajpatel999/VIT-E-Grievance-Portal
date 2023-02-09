<?php
session_start();
$set = isset($_SESSION['id']);
if ($set) {
  include("includes/database.php");
  $id = $_SESSION['id'];
  $query = mysqli_query($con, "SELECT * FROM user WHERE id = $id;");
  $row = mysqli_fetch_array($query);
  $role = $row['role'];
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VIT</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/scrollbar.css">
  <link rel="stylesheet" href="./css/about.css">
  <link rel="stylesheet" href="./css/projects.css">
  <link rel="stylesheet" href="./css/contactus.css">
  <link rel="icon" href="./images/logo.png" type="image/x-icon">
  <style>
    .admin-login-button,
    .postcomplaint-button {
      text-decoration: none;
      color: white;
      background-color: #FFD196;
      padding: 20px 50px;
      font-size: 20px;
      margin: 0px 20px;
    }

    .button-container {
      margin: 40px;
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    .instruction {
      color: white;
      text-align: center;
      padding: 0px 20px;
    }

    .project-1 {
      width: 40%;
      display: inline-block;
      margin-top: 40px;
    }

    .project-2 {
      display: inline-block;
      width: 40%;
    }
  </style>

</head>

<body>
  <table id="navbar" style="min-width: 320xp;">
    <tr>
      <th>
        <a id="navbar-brand" style="text-decoration: none;" href="#"><img src="./images/logo.png"></a>
      </th>
      <th>
        <a style="text-decoration: none;" href="home.php">Home</a>
      </th>
      <th>
        <a style=" text-decoration: none;" href="#about">About</a>
      </th>
      <th>
        <a style="text-decoration: none;" href="#projects">Projects</a>
      </th>
      <th>
        <a style="text-decoration: none;" href="#footer">Contact Us</a>
      </th>
      <?php if ($set) {
        if ($role == 'user') {
      ?>
          <th>
            <a style="text-decoration: none;" href="post_complaint.php">Post Complaint</a>
          </th>
          <th>
            <a style="text-decoration: none;" href="me.php">Dashboard</a>
          </th>
          <th>
            <a style="text-decoration: none;" href="signout.php">Logout</a>
          </th>
        <?php } elseif ($role == 'admin') { ?>
          <th>
            <a style="text-decoration: none;" href="post_complaint.php">View Complaints</a>
          </th>
          <th>
            <a style="text-decoration: none;" href="signout.php">Signout</a>
          </th>
        <?php }
      } else { ?>
        <th>
          <a style="text-decoration: none;" href="signin.php">Login</a>
        </th>
      <?php } ?>
    </tr>
  </table>
  
  <div class="row">
    <div class="column">
      <h1 style="text-align: center">Vellore Institute Of Technology</h1>
      <h2 style="text-align: center">By the Students. For the Students. Of the Students.</h2>
      <h2 class="instruction"> Register your complaints through the new Complaint Register Portal. Click the button to report the issue to a coordinator. </h2>
      <div class="button-container">
        <?php if ($set) {
          if ($role == 'citizen') {
        ?>
            <a class="admin-login-button" href="post_complaint.php">Register a Complaint</a>
          <?php } elseif ($role == 'admin') { ?>
            <a class="admin-login-button" href="home.php">View Complaints</a>
        <?php }
        } ?>
      </div>
    </div>
    <div class="column home-picture">
      <img src="./images/main.png" alt="PMGSY" height="250px" width="500px"/>
      <div class="button-container">
        <?php
        if (!isset($_SESSION['id'])) {
        ?>
          <a class="admin-login-button" href="signin.php">Login</a>
          <a class="postcomplaint-button" href="signup.php">Signup</a>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div id="about">
    <div class="banner-behind">
      <div class="banner-front">
        <h2>Our Vision</h2>
      </div>
    </div>
    <h3 class="vision">To Provide an online platform for students to register their complaint directly to the hostel office and also can see the update for that complaint.</h3>
    <h3 class="vision">To Provide an online platform for hostel office to take action against complaints those registered by students.</h3>
  </div>

  <div id="projects">
    <div class="banner-behind">
      <div class="banner-front">
        <h2>Projects</h2>
      </div>
    </div>
    <div class="project-content">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JA3t27eBL3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <div id="contactus">
    <div class="banner-behind">
      <div class="banner-front">
        <h2>Contact Us</h2>
      </div>
    </div>
    <div class="contactus-content">
      <p>Address: Hostel Office</p>
      <p>Toll-free No.: 1800-233-1234</p>
      <p>Phone: 9876543210</p>
      <p>Email: hostel@vit.ac.in</p>
    </div>
  </div>
</body>

</html>