<?php
    include('../control/page1check.php');

    if(isset($_POST['submit'])){
        header("location: page2.php");
    }
?>
<!DOCTYPE html>
<html>
<body>
<h2>Personal Details</h2>
    <form action="" method="post">
        First Name: <br>
        <input type="text" name="fname">
        <br><br>
        Last Name: <br>
        <input type="text" name="lname">
        <br><br>
        Email: <br>
        <input type="email" name="email">
        <br><br>
        Username: <br>
        <input type="text" name="uname">
        <br><br>
        Password: <br>
        <input type="password" name="password">
        <br><br>
        Website: <br>
        <input type="text" name="web">
        <br><br>
        Select Gender
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>
        <input name="submit" type="submit" value="Submit">
        <input name="reset" type="reset" value="Reset">
    </form>
</body>
</html>