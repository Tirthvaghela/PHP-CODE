<!DOCTYPE html>
<html>
<head>
	<title>Form Insert</title>
</head>
<body>
<form method="POST">
	Id: <input type="text" name="id"><br>
	Name: <input type="text" name="name"><br>
	Email: <input type="text" name="email"><br>
	<input type="submit" name="submit" value="Submit">
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

	$ins = "INSERT INTO student (id, name, email) VALUES ($id, '$name', '$email')";

	$insert_qu = mysqli_query($con, $ins);

	if (!$insert_qu) {
		echo "Data not inserted: " . mysqli_error($con);
	} else {
		echo "Data inserted successfully!";
	}

	mysqli_close($con);
}
?>
</html>
