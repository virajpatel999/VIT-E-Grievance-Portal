<?php
include('session.php');
?>

<!DOCTYPE html>
<html>

<head>
    <title>Post Complaints</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/scrollbar.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/postcomplaints.css">
    <style>
        .login-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 100px;
        }

        .login-subtitle {
            color: #eeb034;
            margin-bottom: 50px;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            padding: 40px 80px;
            align-items: center;
            margin: auto;
            background-color: #FFD196;
        }

        #navbar {
            background-color: #EC9F05;
            margin: 0 0 2rem 0;
            padding-top: 15px;
        }

        a {
            color: white !important;
            border-color: white !important;
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
        <a style=" text-decoration: none;" href="./index.php#about">About</a>
            </th>
            <th>
                <a style="text-decoration: none;" href="./index.php#projects">Projects</a>
            </th>
            <th>
                <a style="text-decoration: none;" href="./index.php#contactus">Contact Us</a>
            </th>
            <th>
                <a style="text-decoration: none;" href="signup.php">Signup</a>
            </th>

        </tr>
    </table>
    <form align="center" method="post" action="complaint.php">
        <div class="postcomplaints-title">
            <div class="banner-behind">
                <div class="banner-front">
                    <h1>Complaint Register</h1>
                </div>
            </div>
        </div>
        <h2 style="color:black">Instructions to fill the form:</h2>
        <ul class="instruction-list">
            <li>All details are to be compulsarily filled.</li>
            <li>Use Capital letters for all the details</li>
            <li>Do not submit multiple complaints for the same issue</li>
        </ul>

        <h3 style="font-size:25px;padding:0px;margin:20px;">Type of complaint</h3>
        <select name="type" id="type">
            <option value="sanitation">Sanitation</option>
            <option value="technological">Technological</option>
            <option value="construction_related">Construction Related</option>
            <option value="other">Other</option>
        </select>


        <h3 style="font-size:25px;padding:0px;margin:5px;">Complaint</h3>
        <input name="body" id="body" style="margin-bottom:20px;" type="textarea" />

        <br>
        <button type="submit" name="submit" id="btn-sub">Submit Details</button>
    </form>

    <h4 align="center">These complaints are overseen by:</h4>
    <dl align="center">
        <dt>Block Supervisor</dt>
        <dt>Chief Warden</dt>
    </dl>
    

</body>
<!-- <script src="../js/postcomplaints.js"></script> -->

</html>