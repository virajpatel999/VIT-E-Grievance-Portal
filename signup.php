<!DOCTYPE html>
<html lang="en">

<head>
    <title>Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/scrollbar.css">
    <link rel="stylesheet" href="./css/postcomplaints.css">
    <link rel="stylesheet" href="./css/style.css">
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

        .gender-list {
            display: flex;
            margin-bottom: 20px;
        }

        .gender-list>label {
            margin-right: 30px;
        }

        #navbar {
            background-color: #EC9F05;
            margin-top: 0;
            padding-top: 15px;
        }

        a {
            color: white !important;
        }

        a:hover {
            border-color: white !important;
        }
    </style>
</head>

<?php

?>



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
                <a style="text-decoration: none;" href="signin.php">Login</a>
            </th>

        </tr>
    </table>
    <div class="login-wrapper">
        <h1 class="login-title"> Vellore Institute Of Technology </h1>
        <h2 class="login-subtitle"> Complaint Resolution portal</h2>
        <form class="login-form" algin="center" method="post" action="signup_form.php">
            <ul>
                <li>This page is for both unregistered users and unregistered admins</li>
            </ul>
            <h2 class="postscomplaints-title">User/Admin Signup</h2>

            <h3 style="font-size:25px;padding:0px;margin:5px;">Username</h3>
            <input required name="username" pattern=".{3,}" title="Three or more characters" id="username" style="margin-bottom:20px; width:350px; padding: 10px;" type="text" />

            <h3 style="font-size:25px;padding:0px;margin:5px;">Full Name</h3>
            <input required name="fullName" pattern=".{3,}" id="fullName" style="margin-bottom:20px; width:350px; padding: 10px;" type="text" />

            <h3 style="font-size:25px;padding:0px;margin:5px;">Registration Number</h3>
            <input required name="reg" pattern="^[0-9]{2}[A-Z]{3}[0-9]{4}$" title="Registration Number" id="reg" style="margin-bottom:20px; width:350px; padding: 10px;" type="text" />

            <h3 style="font-size:25px;padding:0px;margin:5px;">Email ID</h3>
            <input required name="emailId" id="emailId" style="margin-bottom:20px; width:350px; padding: 10px;" type="text" />

            <!-- <h3 style="font-size:25px;padding:0px;margin:5px;">Block</h3> -->
            <!-- <input required name="block" id="block" style="margin-bottom:20px; width:350px; padding: 10px;" type="text"/> -->

            <h3 style="font-size:25px;padding:0px;margin:5px;">Role</h3>
            <input required name="role" id="role" style="margin-bottom:20px; width:350px; padding: 10px;" type="text"/>

            <h3 style="font-size:25px;padding:0px;margin:5px;">Gender</h3>
            <div class="gender-list">
                <input required type="radio" id="male" name="gender" value="male">
                <label for="html">Male</label><br>
                <input required type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
                <input required type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </div>

            <h3 style="font-size:25px;padding:0px;margin:5px;">Password</h3>
            <input required name="password" id="password" type="password" style="margin-bottom:20px; width:350px; padding: 10px;" type="password" />

            <br />
            <button type="submit" name="submit" style="padding: 5px 25px;">Signup</button>
        </form>
        <div>
</body>

</html>