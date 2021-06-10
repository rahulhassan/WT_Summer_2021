<!DOCTYPE html>
<html>
	<head>
		<title>Registration Form</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		
		<hr>
		
		<form action="" method="post">
			<table>
				<tr>
				<td>Full Name :</td>
				<td><input type="text"></td>
				</tr>
				
				<tr>
				<td>Email :</td>
				<td><input type="email"></td>
				</tr>
				
				<tr>
				<td>Password :</td>
				<td><input type="password"></td>
				</tr>
				
				<tr>
				<td>Comment :</td>
				<td><textarea rows="4" cols="40"></textarea></td>
				</tr>
				
				<tr>
					<td>Gender :</td>
					<td>
						<input type="radio" name="Gender"> Male
						<input type="radio" name="Gender"> Female
						<input type="checkbox"> Other
					</td>
				</tr>
			   
				<tr>
					<td>Please Choose a hobby :</td>
					<td>
						<input type="checkbox"> Singing
						<input type="checkbox"> Dancing
						<input type="checkbox"> Reading
					</td>
				</tr>
				
				<tr>
					<td>Please Choose a file :</td>
					<td>
					 <input type="file">
					</td>
				</tr>
				
				<tr>
					<td><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
				</tr>
			</table>
		</form>
	</body>
</html>