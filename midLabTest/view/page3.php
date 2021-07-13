<?php
    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
    <body>
        <h2>Your details are</h2>
        Your first name: <?php echo $_SESSION["fname"];?> <br>
        Your Last name: <?php echo $_SESSION["lname"];?><br>
        Your Email: <?php echo $_SESSION["email"];?><br>
        Your Username: <?php echo $_SESSION["uname"];?><br>
        Your Website: <?php echo $_SESSION["web"];?><br>
        Your gender: <?php echo $_SESSION["gender"];?><br>
        Your University: <?php echo $_SESSION["university"];?><br>
        Your Department: <?php echo $_SESSION["department"];?><br>
        Your CGPA: <?php echo $_SESSION["cgpa"];?><br>
        Your Company Name: <?php echo $_SESSION["cname"];?><br>
        Your years of Experience: <?php echo $_SESSION["yearex"];?><br>
        <br><br>
        <a href="../control/sessionDestroy.php">Back to Home</a>

    </body>
</html>