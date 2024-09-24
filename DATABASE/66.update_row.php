<!DOCTYPE html>
<html>
<head>
	<title>Form Update</title>
</head>
<body>
 <h4>Enter id and change name and email</h4>

<form method="POST">
	Id: <input type="text" name="id" required><br>
	Name: <input type="text" name="name" required><br>
	Email: <input type="text" name="email" required><br>
	<input type="submit" name="submit" value="Update">
</form>
</body>
<?php
if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}
   
	$update = "UPDATE student SET name='$name', email='$email' WHERE id=$id";

	$update_qu = mysqli_query($con, $update);

	if (!$update_qu) {
		echo "Data not updated: " . mysqli_error($con);
	} else {
		echo "Data updated successfully!";
	}

	mysqli_close($con);
}
?>
</html>
