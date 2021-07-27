
<html>
<head>
<script>
function validateForm (){
	var fname = document.getElementById ("fname").value;
	var lname = document.getElementById ("lname").value;
	if (fname=="" || lname ==""){
		alert("Name must be filled out");
		return false;
	}
	return true;
}
</script>
</head>
<body>
	<form name="myForm" action="action_page.php" onsubmit ="return validateForm()" method="post">
		First Name: <input type="text" id="fname" name="fname"> <br>
		Last Name: <input type="text" id="lname" name="lname"> <br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>