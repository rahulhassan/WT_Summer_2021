<?php
$cookie_name ="User";
$cookie_value = "Welcome Back To The Dashboard";

setcookie($cookie_name, $cookie_value, time()+(86400 * 30),"/");


?>

<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])){
	echo "You are new user";
}else {
	
	//echo "Cookie '".$cookie_name. "' is set!<br>";
	echo $_COOKIE[$cookie_name];
}

?>
</body>
</html>