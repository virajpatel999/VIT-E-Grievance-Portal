<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Form</title>
</head>

<body>
    <form action="userform.php" method="post">
        <label>Username<input type="text" name="uname"></label> <br>
        <label>Password<input type="password" name="upass"></label> <br>
        <label>Remember?<input type="checkbox" name="urem"></label> <br>
        <label>Submit<input type="submit" name="usub"></label> <br>
    </form>
</body>
<?php
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
if ($_REQUEST["POST"]) {
    if ($_POST["urem"]) {
        $_SESSION["name"] = addslashes($_POST["uname"]);
    } else {
        $_SESSION["name"] = null;
    }
} else {
    if (!empty($_SESSION["name"])) {
        echo "Recent username: " . $_SESSION["name"];
    }
}
?>

</html>