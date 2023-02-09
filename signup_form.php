<?php
include('includes/database.php');

if (isset($_POST['submit'])) {
	$fullname = addslashes($_POST['fullName']);
	$username = addslashes($_POST['username']);
	$email = addslashes($_POST['emailId']);
	$reg = addslashes($_POST['reg']);
	// $block = addslashes($_POST['block']);
	$gender = addslashes($_POST['gender']);
	$password = addslashes($_POST['password']);
	$role= addslashes($_POST['role']);


	$sql = mySQLi_query($con, "select * from user WHERE email='$email'");
	$row = mySQLi_num_rows($sql);
	if ($row > 0) {
		echo "<script>alert('E-mail already taken!'); window.location='signup.php'</script>";
	} else {
		$sql = "INSERT INTO user (fullname, username, email, reg , gender, password, role)
		VALUES ('$fullname', '$username', '$email', '$reg', '$gender', '$password' , '$role')";
		// mySQLi_query($con, $sql);
		if (mysqli_query($con, $sql)) {
			echo "New record created successfully";
			echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
		} else {
			$err = mysqli_error($con);
			echo "Error: " . $err;
			echo "<script>alert('Could not create account!Error'); window.location='signup.php'</script>";
			// echo "Error: " . mysqli_error($con) . "<br>";
			// " . mysqli_error($con) . "
		}
	}
}
