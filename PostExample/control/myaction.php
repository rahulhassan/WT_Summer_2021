<html>
	<body>
	<?php
	$user = $_POST["fname"];
	$result = "";
	if($user == "")
	{
		$result = "Please enter valid name";
	}
	else 
	{
		$result = $user;
	}
	?>
	welcome <?php echo "here ".$result;?><br>
	Your email address is: <?php echo $_POST["email"];
	echo "<br>";
	echo "Your info have been shown.";
	?>
	</body>
</html>