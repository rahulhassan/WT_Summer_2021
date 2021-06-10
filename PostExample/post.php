
<?php
	$result = $result1="";
	$user = $email ="";
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$user = $_POST["fname"];
		
		if($user == "")
		{
			$result = "Please enter valid name";
		}
		$email=$_POST["email"];
		
		if($email == ""){
			$result1 = "Please enter valid email";
		}
		
	}
	
?>

<html>
	<body>
		<form action = "" method = "post">
			Name: <input type= "text" name="fname"><?php echo $result;?><br>
			Email: <input type= "text" name="email"><?php echo $result1;?><br>
			<input type ="submit">
		</form>
	</body>
</html>

<?php
echo $user;
echo "<br>";
echo $email;
?>