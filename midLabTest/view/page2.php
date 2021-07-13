<?php
    include('../control/page2check.php');

    if(isset($_POST['next'])){
        header("location: page3.php");
    }
?>

<!DOCTYPE html>
<html>
<body>
<h2>Educational Details</h2>
    <form action="" method="post">
        University: <br>
        <input type="text" name="university">
        <br><br>
        Department: <br>
        <input type="text" name="department">
        <br><br>
        CGPA: <br>
        <input type="text" name="cgpa">
        <br><br>
        Year Completed: <br>
        <input type="text" name="yearcm">
        <br><br>
        Company Name: <br>
        <input type="text" name="cname">
        <br><br>
        Years of Experience: <br>
        <input type="text" name="yearex">
        <br><br>
        <input type="submit" name="next" value="submit">
    </form>
</body>
</html>