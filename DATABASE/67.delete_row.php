<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
<body>
 <h4>Enter id and delete</h4>

<form method="POST">
	Id: <input type="text" name="id" required><br>
	<input type="submit" name="delete" value="Delete">
</form>
</body>
<?php
if (isset($_POST['delete'])) {

	$id = $_POST['id'];

	$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
   
	$update = "DELETE FROM student WHERE id=$id";

	$update_qu = mysqli_query($con, $update);

	if (!$update_qu) {
		echo "Data not Deleted: " . mysqli_error($con);
	} else {
		echo "Data Deleted successfully!";
	}

	mysqli_close($con);
}
?>
</html>
