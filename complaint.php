<?php
include('session.php');
?>
<?php
include('includes/database.php');

if (mysqli_connect_errno()) {
	echo mysqli_connect_error();
}

// if (isset(addslashes($_POST['submit']))) {
// }
echo "starting insert ....\n";
$type = addslashes($_POST['type']);
$body = addslashes($_POST['body']);
$user_id = $_SESSION['id'];

echo $type . "\nbody" . $body;

$sql = mySQLi_query($con, "select * from user WHERE id='$user_id'");
$row = mySQLi_num_rows($sql);
if ($row == 0) {
	echo "<script>alert('Not Authorised'); window.location='signout.php'</script>";
} else {
	$sql = "INSERT INTO complaint (type, body, user_id) VALUES ('$type', '$body', '$user_id')";
	// mySQLi_query($con, $sql);
	if (mysqli_query($con, $sql)) {
		echo "Posted complaint successfully";
		echo "<script>window.location='index.php'</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}

?>