<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<style type="text/css">
		font{
			color: red;
		}
	</style>
</head>
<body>
	<form method="POST">
		<table border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"><font>*</font></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="Email"><font>*</font></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="Time" name="Time"><font>*</font></td>
			</tr>
			<tr>
				<td>Classes : </td>
				<td><textarea name="Class" cols="50" rows="10"></textarea></td>
			</tr>
			<tr>
				<td>Gender : </td>
				<td><input type="radio" name="Gender" value="Male">Male
				&nbsp;<input type="radio" name="Gender" value="Female">Female<font>*</font></td>
			</tr>
			<tr>
				<td>Select : </td>
				<td><select name="language[]" multiple >
					<option value="C">C</option>
					<option value="C++">C++</option>
					<option value="HTML">HTML</option>
					<option value="Python">Python</option>
					<option value="JAVA">JAVA</option>
				</select>
			</td>
			</tr>
			<tr>
				<td>Agree : </td>
				<td><input type="checkbox" name="agg" ></td>
			</tr>
			<tr>
				<td><input type="Submit" name="Submit" value="Submit"></td>
			</tr>
		</table>
	</form>

	<?php
	if (isset($_POST['Submit'])) {
		$name=$_POST['name'];
		$Email=$_POST['Email'];
		$Time=$_POST['Time'];
		$Classes=$_POST['Class'];
		$Gender=$_POST['Gender'];
		$Select=$_POST['language'];
		$Agree=$_POST['agg'];



		echo "<h2> You are given details are as :</h2>
            <table border=2>
			 <tr>
                    <td>Name</td>
                    <td>$name</td>
            </tr>
             <tr>
                    <td>Email</td>
                    <td>$Email</td>
            </tr>
			<tr>
                    <td>Time</td>
                    <td>$Time</td>
            </tr>
            <tr>
                    <td>Classes</td>
                    <td>$Classes</td>
            </tr>
             <tr>
                    <td>Select</td>";
                    
			foreach ($_POST['language'] as $value) {
				
             echo "<td>$value </td>";
         }
           echo "</tr>
            <tr>
                    <td>Agree</td>
                    <td>$Agree</td>
            </tr>
		</table>";
		}
?>
</body>
</html>