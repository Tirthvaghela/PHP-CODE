<!DOCTYPE html>
<html>
<head>
	<title>Full Form</title>
</head>
<body>
<table width="60%" align="center"  cellpadding="20" cellspacing="10" style="font-family: sans-serif; height: 95vh;">
	<form action="5_(PHP).php" method="POST">
		<tr>
			<td colspan="2" bgcolor="gray" style="color:white;"><b>Testform</b></td>
		</tr>
		<tr>
			<td width="30%">Name</td>
			<td width="60%"><input type="text" name="name"></td>
		</tr>	
		<tr>
			<td width="30%">Password</td>
			<td width="60%"><input type="password" name="pwd"></td>
		</tr>
		<tr>
			<td width="30%">Gender</td>
			<td width="60%"><input type="radio" name="gender" value="male">Male
				<br>
				<input type="radio" name="gender" value="female">Female</td>
		</tr>
		<tr>
			<td width="30%">Continent</td>
			<td width="60%"><select name="continent">
				<option>Asia</option>
				<option>Australia</option>
				<option>Europe</option>
			</select></td>
		</tr>
		<tr>
			<td width="30%">Meals</td>
			<td width="60%"><input type="checkbox" name="meals[]" value="Breakfast">Breakfast
				<br>
				<input type="checkbox" name="meals[]" value="Lunch">Lunch
				<br>
				<input type="checkbox" name="meals[]" value="Dinner">Dinner</td>
		</tr>
		<tr bgcolor="gray">
			<td align="right" colspan="2">
				<input type="Submit" name="Submit" value="Submit">
				<input type="reset" name="reset" value="Cancel">
			</td>
		</tr>
	</form>
</table>
</body>
</html>
